<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name', 100);
            $table->decimal('total_amount', 13, 2)->default(0);
            $table->decimal('current_amount', 13, 2)->default(0);
            $table->enum('status', ['active', 'finished'])->default('active');
            $table->date('deadline');
            $table->tinyInteger('priority')->default(1);
            $table->foreignId('icon_id')->nullable()->constrained('icons');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
