<?php

namespace App\Models;

use App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Income extends Model
{
    protected $table = 'incomes';

    protected $fillable = [
        'description',
        'value',
        'user_id',
        'category_id',
        'type',
        'date'
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);

    }

    public function getTypeLabelAttribute()
    {
        return $this->type === 'recurring' ? 'Recorrente' : 'Esporádico';
    }
}
