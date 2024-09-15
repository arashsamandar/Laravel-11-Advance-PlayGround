<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(fn(self $model) => $model->password = bcrypt($model->password));
    }

    public function sentMessages(): MorphMany
    {
        return $this->morphMany(Message::class, 'sender');
    }

    public function receivedMessages(): MorphMany
    {
        return $this->morphMany(Message::class, 'receiver');
    }

}
