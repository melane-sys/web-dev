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
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            
            // Contact Information
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('address');
            
            // Academic Information
            $table->integer('grade');
            $table->json('subjects')->nullable();
            
            // Payment Information
            $table->decimal('amount', 10, 2);
            $table->string('payment_method'); // 'stripe' or 'mtn_momo'
            $table->string('payment_status')->default('pending'); // pending, completed, failed
            $table->string('payment_id')->nullable(); // Payment reference from Stripe/MTN
            $table->json('payment_details')->nullable(); // Additional payment details
            
            // Registration Status
            $table->string('status')->default('incomplete'); // incomplete, completed
            $table->integer('current_step')->default(1); // Track multi-step form progress
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_registrations');
    }
};
