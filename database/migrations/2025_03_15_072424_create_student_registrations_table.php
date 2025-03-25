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
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('guardian_name');
            $table->string('guardian_relationship');
            $table->string('guardian_phone');
            $table->string('guardian_email');
            $table->string('current_school')->nullable();
            $table->string('grade_level');
            $table->text('preferred_subjects');
            $table->enum('learning_mode', ['live', 'recorded', 'both']);
            $table->enum('payment_method', ['mtn', 'bank', 'paypal', 'other']);
            $table->text('billing_address')->nullable();
            $table->enum('referral_source', ['social', 'referral', 'website', 'other']);
            $table->text('special_needs')->nullable();
            $table->boolean('communication_consent')->default(false);
            $table->enum('registration_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamp('registration_date')->useCurrent();
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
