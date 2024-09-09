<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @method static find($id)
 */

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

    public function scopePublishDate($query,Carbon $date)
    {
        return $query->where('publish_date', '<', $date);
    }

}
