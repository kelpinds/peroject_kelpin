<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class spp extends Model
{
    use HasFactory;
    protected $table = "spp";
    protected $primaryKey = "id_spp";
    public $incrementing=false;
    // protected $keyType = "string";
    protected $guarded=[];
    public function siswa(): HasMany
    {
        return $this->hasMany(siswa::class, 'id_spp', 'id_spp');
    }
}
