<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new \App\Models\User;

        Pengajar::create([
            "namapengajar"           => "albert", 
            "spesialis"              => "Python", 
            "kontakemail"            => "albertis@gmail.com",
        ]);
        Pengajar::create([
            "namapengajar"           => "dia", 
            "spesialis"              => "PHP", 
            "kontakemail"            => "diaisnot@gmail.com",
        ]);
        Pengajar::create([
            "namapengajar"           => "sugenep", 
            "spesialis"              => "Javascrip", 
            "kontakemail"            => "sugenep@gmail.com",
        ]);
        
    }
    }