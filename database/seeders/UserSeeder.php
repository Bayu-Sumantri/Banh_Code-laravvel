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

        $user->name="bayu";
        $user->email="bayu@gmail.com";
        $user->password= \bcrypt('bayu1212');
        $user->level= "admin";
        $user->save();
        $this->command->info("user telah di buat");
        
        
    }
}