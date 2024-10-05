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
        Schema::create('userrates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id') // Foreign key column
            ->constrained('programs') // References 'id' in 'programs' table
            ->onDelete('cascade'); // Optional: if program is deleted, details will be deleted too
            $table->string('email');
            $table->string('comment');
            $table->integer('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userrates');
    }
};
