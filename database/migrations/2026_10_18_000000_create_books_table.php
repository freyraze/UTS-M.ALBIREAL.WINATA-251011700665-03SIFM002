<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // 1
            $table->string('author');              // 2
            $table->string('genre');               // 3
            $table->unsignedInteger('price');      // 4
            $table->string('image');               // 5 (path gambar)
            $table->text('summary');               // 6
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
