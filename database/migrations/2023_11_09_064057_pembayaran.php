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
        Schema::create('pembayaran',function(Blueprint $tabel){
            $tabel->integer('id_pembayaran')->autoIncrement();
            $tabel->integer('id_petugas');
            $tabel->string('nisn',10);
            $tabel->date('tgl_bayar');
            $tabel->string('bulan_dibayar',8);
            $tabel->string('tahun_dibayar',4);
            $tabel->integer('id_spp');
            $tabel->integer('jumlah_bayar');
            $tabel->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pembayaran');
    }
};
