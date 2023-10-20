<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas"; 

    protected $primaryKey = 'kelasID';

    protected $fillable = [
        "namakelas",
        "images",
        "deskripsikelas",
        "harga",
        "pengajarID",
    ];

    public function pengajar(): BelongsTo
    {
        return $this->belongsTo(Pengajar::class, 'pengajarID');
    }

    public function transaksi(): hasOne
    {
        return $this->hasOne(Transaksi::class, 'kelasID');
    }
    
    public function tugas(): hasOne
    {
        return $this->hasOne(Tugas::class, 'kelasID');
    }
    
}