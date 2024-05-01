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
        Schema::create('coin_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_id');
            $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('coin_price', 12, 2);
            $table->string('quantity');
            $table->decimal('total_price', 12, 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coin_purchases');
    }
};
