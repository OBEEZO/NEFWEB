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
        Schema::create('pastevents', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable(); // Allowing null in case no image is provided
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastevents');
    }
};
