<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    protected $fillable = [
        'description',
        'value',
        'user_id',
        'category_id',
        'date'
    ];
}
