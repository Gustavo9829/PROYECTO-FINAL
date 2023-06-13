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
        Schema::create('motorcycle', function (Blueprint $table) {
            $table->id();
            $table->string('motorcycle_name');
            $table->string('marca');
            $table->string('description',1000);
            $table->bigInteger('category_id')->unsigned();
            $table->string('image');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::dropIfExists('motorcycle');
    }
};