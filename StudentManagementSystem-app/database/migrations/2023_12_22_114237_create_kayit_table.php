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
        Schema::create('kayit', function (Blueprint $table) {
            $table->id();
            $table->string('kayitNo');
            $table->unsignedBigInteger('sinavId');
            $table->unsignedBigInteger('ogrenciId');
            $table->date('katilmaTarihi');
            $table->double('ücret');
            $table->foreign('sinavId')->references('id')->on('sinav')->onDelete('cascade');
            $table->foreign('ogrenciId')->references('id')->on('ogrenci')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kayit');
    }
};
