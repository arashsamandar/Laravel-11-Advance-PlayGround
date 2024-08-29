<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mock extends Model
{
    use HasFactory;

    protected $table = 'arash_mock_table';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

}
