<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "nisn";
    public $incrementing=false;
    protected $keyType = "string";
    protected $guarded=[];

    public function pembayaran(): HasMany
    {
        return $this->hasMany(pembayaran::class, 'nisn', 'nisn');
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(kelas::class, 'id_kelas', 'id_kelas');
    }
    public function spp(): BelongsTo
    {
        return $this->belongsTo(spp::class, 'id_spp', 'id_spp');
    }
}
