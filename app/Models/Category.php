<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Income;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'user_id',
        'name',
        'type'
    ];

    public function income(): HasMany{
        return $this->hasMany(Income::Class);
    }


}
