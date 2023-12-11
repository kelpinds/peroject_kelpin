<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $primaryKey = "id_kelas";
    public $incrementing=false;
    // protected $keyType = "string";
    protected $guarded=[];

    public function kelas(): HasMany
        {
        return $this->hasMany(siswa::class,'id_kelas','id_kelas');
    }
}
