<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // Название задачи
            $table->text('description');       // Описание задачи
            $table->timestamps();                     // created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
