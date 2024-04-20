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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coin_id');
            $table->foreign('coin_id')->references('id')->on('coins')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
