<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;
    
    protected $table = "tugas"; 

    protected $primaryKey = 'tugasID';

    protected $fillable = [
        "namatugas",
        "keterangan",
        "deadline",
        "kelasID",
        "userID",
        "pengajarID",
    ];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(kelas::class, 'kelasID');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userID');
    }
    
    public function pengajar(): BelongsTo
    {
        return $this->belongsTo(pengajar::class, 'pengajarID');
    }

    
}