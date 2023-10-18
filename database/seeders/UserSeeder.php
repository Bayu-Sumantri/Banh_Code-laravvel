<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pengajar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User;

        User::create([
            "name"           => "bayu", 
            "email"          => "bayu@gmail.com", 
            "Profile"          => "",
            "level"          => "Admin", 
            "password"       => \bcrypt('bayu12345')
        ]);
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