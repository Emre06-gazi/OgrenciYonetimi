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
        Schema::create('sinav', function (Blueprint $table) {
            $table->id();
            $table->string('sinavAdi');
            $table->unsignedBigInteger('dersId');
            $table->date('baslangicTarihi');
            $table->foreign('dersId')->references('id')->on('dersler')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinav');
    }
};
