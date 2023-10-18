<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'transaksiID';

    protected $table = "transaksis";
    
    protected $fillable = [
        "name",
        "email",
        "metode_pembayaran",
        "no_dana",
        "rek_bank",
        "no_telepon",
        "kelasID",
    ];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelasID');
    }

    public function pembelian(): hasOne
    {
        return $this->hasOne(Pembelian::class, 'transaksiID');
    }
}