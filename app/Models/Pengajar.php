<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = "pengajars"; 

    protected $fillable = [
        "nama_makanan",
        "namapengajar",
        "spesialis",
        "kontakemail",
    ];
    public function kelas(): HasOne
    {
        return $this->hasOne(Kelas::class, 'pengajarID');
    }
}