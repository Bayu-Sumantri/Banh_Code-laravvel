<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;

    protected $primaryKey = 'pembelianID';

    
    protected $table = "pembelians";
    
    protected $fillable = [
        "userID",
        "transaksiID",
    ];


    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class, 'transaksiID');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userID');
    }
    
}