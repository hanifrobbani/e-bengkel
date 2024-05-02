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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_transaksi');
            $table->text('data_barang');
            $table->text('nama_pelanggan');
            $table->text('alamat');
            $table->unsignedBigInteger('spare_part_id');
            $table->unsignedBigInteger('no_telp');
            $table->unsignedBigInteger('harga_barang');
            $table->unsignedBigInteger('jumlah_barang');
            $table->unsignedBigInteger('total_payment');
            $table->unsignedBigInteger('uang_tunai');
            $table->bigInteger('kembalian');
            $table->text('catatan');
            $table->timestamps();

            $table->foreign('spare_part_id')->references('id')->on('spare_part')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
