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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('designation')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_email')->unique();
            $table->string('emp_phone')->nullable();
            $table->integer('salary')->nullable();
            $table->date('join_date')->nullable();
            $table->text('profile_img')->nullable();
            $table->string('emp_address')->nullable();  
            $table->tinyInteger('emp_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
