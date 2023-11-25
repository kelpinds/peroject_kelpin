<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayaran";
    protected $primaryKey = "id_pembayaran";
    public $incrementing=false;
    // protected $keyType = "string";
    protected $guarded=[];

    public function petugas(){
        return $this->belongsTo(petugas::class,'id_petugas','id_petugas');
    }
    public function siswa(){
        return $this->belongsTo(siswa::class,'nisn','nisn');
    }
    public function spp(){
        return $this->belongsTo(spp::class,'id_spp','id_spp');
    }
}
