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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('details');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('image');
            $table->string('images');
            $table->unsignedInteger('subCategory_id')->nullable();
            $table->string('description');
            $table->timestamps();
            $table->foreign('subCategory_id')->references('id')->on('sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
