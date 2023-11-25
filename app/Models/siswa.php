<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "nisn";
    public $incrementing=false;
    protected $keyType = "string";
    protected $guarded=[];

    public function kelas(){
        return $this->belongsTo(kelas::class,'id_kelas','id_kelas');
    }
    public function spp(){
        return $this->belongsTo(spp::class,'id_spp','id_spp');
    }
}
