<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class petugas extends Model
{
    use HasFactory;

    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    public $incrementing=false;
    // protected $keyType = "string";
    protected $guarded=[];
    public function pembayaran(): HasMany
    {
        return $this->hasMany(pembayaran::class, 'id_petugas', 'id_petugas');
    }
}
