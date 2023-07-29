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
            $table->id()->index();
            $table->string('fullName');
            $table->string('address');
            $table->string('phone', 20); 
            $table->date('date');
            $table->string('class', 10);
            $table->string('department', 10);
            $table->string('course', 10);
            $table->timestamps();
            $table->foreign('class')->references('class_code')->on('classrooms');
            $table->foreign('department')->references('department_code')->on('departments');
            $table->foreign('course')->references('course_code')->on('courses');
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
