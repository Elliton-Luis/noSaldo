<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goals';

    protected $fillable = [
        'user_id', 'name', 'total_amount', 'current_amount',
        'status', 'deadline', 'priority', 'icon_id'
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
