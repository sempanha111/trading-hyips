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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id') // Foreign key column
            ->constrained('programs') // References 'id' in 'programs' table
            ->onDelete('cascade'); // Optional: if program is deleted, details will be deleted too
            $table->string('domain_name')->nullable();
            $table->string('register_id')->nullable();
            $table->string('server')->nullable();
            $table->timestamp('updated')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('expired')->nullable();
            $table->string('registrar_enom')->nullable();
            $table->string('registrar_iana_id')->nullable();
            $table->string('registrar_email')->nullable();
            $table->string('registrar_phone')->nullable();
            $table->string('domain_status')->nullable();
            $table->string('name_server')->nullable();
            $table->string('dnssec')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
