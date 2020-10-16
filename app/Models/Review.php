<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'rate',
        'message',
    ];

}
