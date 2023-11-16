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
        Schema::create('pesanan_menu', function (Blueprint $table) {
            $table->unsignedBigInteger('pelayan_id')->nullable();
            $table->foreign('pelayan_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('pesanan_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('menu_id')->constrained()->cascadeOnDelete();
            $table->string('kuantitas');
            $table->enum('status', ['ordered', 'canceled', 'delivered'])->default('ordered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_menu');
    }
};
