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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meetup_session_id')->constrained('meetup_sessions');
            $table->string('title'); // Ex: Tuberías y Monedas
            $table->string('type'); // Ex: Juego, Devocional, Seminario, etc.
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('modality')->nullable(); // Ex: 2, 4, 12 compañías
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
