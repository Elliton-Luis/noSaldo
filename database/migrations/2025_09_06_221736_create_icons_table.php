<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Default');
            $table->string('class')->default('bi-pin');
            $table->string('category')->nullable();
            $table->string('icon_color', 20)->default('amber-400');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('icons');
    }
};
