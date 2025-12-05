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
        Schema::create('petanis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();
        });

        Schema::create('lahans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_lahan');
            $table->unsignedBigInteger('petani_id');
            $table->string('lokasi');
            $table->double('luas');
            $table->timestamps();

            $table->foreign('petani_id')->references('id')->on('petanis')->onDelete('cascade');
        });

        Schema::create('tanamans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lahan_id');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('lahan_id')->references('id')->on('lahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
