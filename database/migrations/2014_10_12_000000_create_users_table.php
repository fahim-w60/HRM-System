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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('profile_image')->nullable();
            $table->enum('user_type',['chairman','director_general','director','hr_manager','employee'])->default('employee');
            $table->string('phone')->nullable();
            $table->enum('gender',['male','female','others'])->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('address')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamp('last_logout')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
