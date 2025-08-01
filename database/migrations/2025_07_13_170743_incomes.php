<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories','id')->onDelete('cascade');
            $table->string('description');
            $table->decimal('value',8,2);
            $table->enum('type', ['recurring', 'sporadic'])->default('sporadic');
            $table->date('date')->now();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
