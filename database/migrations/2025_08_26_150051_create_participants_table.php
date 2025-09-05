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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('preferred_name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('email_contact_name')->nullable();
            $table->string('phone_contact_name')->nullable();
            $table->string('contact_name_two')->nullable();
            $table->string('email_contact_name_two')->nullable();
            $table->string('phone_contact_name_two')->nullable();
            $table->integer('age')->nullable();
            $table->string('stake')->nullable();
            $table->string('ward')->nullable();
            $table->string('bishop_email')->nullable();
            $table->string('bishop_name')->nullable();
            $table->string('dietary_restrictions')->nullable();
            $table->string('medical_conditions')->nullable();
            $table->string('tshirt_size')->nullable();
            $table->string('approval_status')->nullable();
            $table->boolean('attended')->default(false);
            $table->boolean('is_member')->default(true);
            $table->boolean('kit_delivered')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
