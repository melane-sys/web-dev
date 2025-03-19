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
            $table->id('student_id');
            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('national_id')->unique();
            $table->string('profile_picture')->nullable();
            
            // Contact Information
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->text('address');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            
            // Academic Information
            $table->string('school_name');
            $table->string('grade_level');
            $table->json('subjects');
            $table->enum('preferred_mode', ['Online', 'Physical', 'Hybrid']);
            
            // Account & System Information
            $table->timestamp('registration_date')->useCurrent();
            $table->enum('status', ['Pending', 'Active', 'Inactive'])->default('Pending');
            $table->string('password');
            $table->string('student_number')->unique();
            $table->text('notes')->nullable();
            $table->timestamps();
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
