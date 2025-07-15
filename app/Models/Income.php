<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'description',
        'value',
        'user_id',
        'category_id',
        'date'
    ];
}
