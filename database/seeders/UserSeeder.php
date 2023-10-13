<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        
    }
}