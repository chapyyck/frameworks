<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Название категории
            $table->text('description');      // Описание категории
            $table->timestamps();                    // created_at и updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
