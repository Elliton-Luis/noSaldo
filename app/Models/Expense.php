<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $table = 'expenses';

    protected $fillable = [
        'description',
        'value',
        'user_id',
        'category_id',
        'date',
        'type'
    ];

    public function getTypeLabelAttribute()
    {
        return $this->type === 'recurring' ? 'Recorrente' : 'Esporádico';
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);

    }
}
