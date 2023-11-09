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
        Schema::create('siswa',function(Blueprint $tabel){
            $tabel->string('nisn',10);
            $tabel->string('nis',8);
            $tabel->string('nama',35);
            $tabel->integer('id_kelas');
            $tabel->text('alamat');
            $tabel->string('no_telp',13);
            $tabel->integer('id_spp');
            $tabel->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('siswa');
    }
};
