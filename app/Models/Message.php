<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'sender_id', 'sender_type', 'receiver_id', 'receiver_type', 'is_read'];

    public function sender(): MorphTo
    {
        return $this->morphTo('sender');
    }

    public function receiver(): MorphTo
    {
        return $this->morphTo('receiver');
    }

    // In your Message model
    public static function sendMessage(User|Admin $sender, User|Admin $receiver, string $message): self
    {
        return DB::transaction(function () use ($sender, $receiver, $message) {
            $message = new static([
                'message' => $message,
                'receiver_id' => $receiver->id,
                'receiver_type' => get_class($receiver),
            ]);
            $sender->sentMessages()->save($message);
            $receiver->receivedMessages()->save($message);

            return $message;
        });
    }
}
