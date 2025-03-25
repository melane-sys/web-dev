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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            
            // System Fields
            $table->string('student_id')->unique();
            
            // Personal Information
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('nationality');
            $table->string('id_passport')->unique();
            
            // Contact Information
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('alt_phone')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            
            // Guardian Information
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            
            // Academic Information
            $table->string('previous_school');
            $table->string('grade_level');
            $table->string('academic_year');
            $table->text('subjects')->nullable();
            
            // Account Information
            $table->string('password');
            $table->boolean('communication_consent')->default(false);
            
            // System Timestamps
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
