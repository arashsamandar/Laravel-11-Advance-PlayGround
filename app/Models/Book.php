<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'publish_date',
        'serialNumber'
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function (self $model) {
            $model->serialNumber = strtoupper(sha1(time().rand()));
        });
    }

    public function returnSomething(): string {
        return "hello arash from Book modle";
    }

}
