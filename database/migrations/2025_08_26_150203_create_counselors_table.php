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
        Schema::create('counselors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('pin');
            $table->string('type'); // Ex: Consejero, Auxiliar;
            $table->string('gender')->nullable();
            $table->string('dietary_restrictions')->nullable();
            $table->string('medical_conditions')->nullable();
            $table->string('tshirt_size')->nullable();
            $table->string('approval_status')->nullable(); // Ex: Pendiente, Rechazado, Aprobado
            $table->boolean('attended')->default(false);
            $table->boolean('checkin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselors');
    }
};
