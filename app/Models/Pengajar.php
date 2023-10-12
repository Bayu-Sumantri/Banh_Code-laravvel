<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}