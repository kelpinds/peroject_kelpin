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
        Schema::create('kelas',function(Blueprint $tabel){
            $tabel->integer('id_kelas')->autoIncrement();
            $tabel->string('nama_kelas',10);
            $tabel->string('Kopetemsi_keahlian',50);
            $tabel->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kelas');
    }
};
