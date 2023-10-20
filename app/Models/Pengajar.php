<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "userID",
    ];
    public function kelas(): hasOne
    {
        return $this->hasOne(Kelas::class, 'pengajarID');
    }
    
    public function tugas(): hasOne
    {
        return $this->hasOne(Tugas::class, 'pengajarID');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userID');
    }
    
}