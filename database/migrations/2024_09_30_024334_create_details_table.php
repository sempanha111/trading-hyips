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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id') // Foreign key column
                ->constrained('programs') // References 'id' in 'programs' table
                ->onDelete('cascade'); // Optional: if program is deleted, details will be deleted too
            $table->string('image')->nullable();
            $table->string('type_listing');
            $table->integer('payout_ratio');
            $table->integer('ref_back');
            $table->integer('our_rate');
            $table->decimal('our_investment', 10, 2);
            $table->decimal('min', 10, 2);
            $table->decimal('max', 10, 2);
            $table->integer('referral');
            $table->string('withdraw_type');
            $table->text('plans_description')->nullable();
            $table->boolean('payeer')->default(false);
            $table->boolean('perfect_money')->default(false);
            $table->boolean('bitcoin')->default(false);
            $table->boolean('litecoin')->default(false);
            $table->boolean('bitcoin_cash')->default(false);
            $table->boolean('ethereum')->default(false);
            $table->boolean('usdt_bep20')->default(false);
            $table->boolean('usdt_trc20')->default(false);
            $table->boolean('epaycore')->default(false);
            $table->boolean('tron')->default(false);
            $table->boolean('bnb')->default(false);
            $table->boolean('advcash')->default(false);
            $table->boolean('okpay')->default(false);
            $table->boolean('mastercard')->default(false);
            $table->boolean('solidtrustpay')->default(false);
            $table->boolean('webmoney')->default(false);
            $table->boolean('paypal')->default(false);
            $table->boolean('yandex')->default(false);
            $table->boolean('nxmoney')->default(false);
            $table->boolean('dash')->default(false);
            $table->boolean('dogcoin')->default(false);
            $table->boolean('ripple')->default(false);
            $table->boolean('stella')->default(false);
            $table->boolean('bertcash')->default(false);
            $table->boolean('sslsecurtiy')->default(false);
            $table->boolean('ddos')->default(false);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
