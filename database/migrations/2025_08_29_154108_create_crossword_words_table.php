<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crossword_words', function (Blueprint $table) {
            $table->id();
            $table->foreignId('puzzle_id')->constrained('puzzles');
            $table->string('word');
            $table->string('normalized_word');
            $table->string('clue');
            $table->string('direction');
            $table->integer('row')->unsigned();
            $table->integer('col')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crossword_words');
    }
};
