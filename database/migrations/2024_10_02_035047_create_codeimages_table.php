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
        Schema::create('codeimages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id') // Foreign key column
            ->constrained('programs') // References 'id' in 'programs' table
            ->onDelete('cascade'); // Optional: if program is deleted, details will be deleted too
            $table->string('image1')->nullable();
            $table->string('code1')->nullable();
            $table->string('image2')->nullable();
            $table->string('code2')->nullable();
            $table->string('image3')->nullable();
            $table->string('code3')->nullable();
            $table->string('image4')->nullable();
            $table->string('code4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codeimages');
    }
};
