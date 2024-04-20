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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->decimal('price', 12, 2); // Assuming price can have decimals
            $table->bigInteger('market_capacity');
            $table->bigInteger('volume')->nullable();
            $table->bigInteger('circulating_supply');
            $table->bigInteger('max_supply')->nullable();
            $table->bigInteger('fully_diluted_market_cap')->nullable();
            $table->string('ucid')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
