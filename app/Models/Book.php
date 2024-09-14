<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * @var mixed|string[]
     */
    protected $fillable = [
        'name',
        'author',
        'publish_date',
        'serialNumber'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(fn(self $model) => $model->serialNumber = strtoupper(sha1(time().rand())));
    }

    public function scopePublishDate($query,Carbon $date)
    {
        return $query->where('publish_date', '<', $date);
    }

}
