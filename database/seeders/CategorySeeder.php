<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'id'=>1,
            'user_id'=>1,
            'name'=>'tigrinho',
            'type'=>'both'
        ]);
    }
}
