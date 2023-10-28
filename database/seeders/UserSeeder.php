<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =User::where ('email','admin@gmail.com')->first();
        if(is_null($user))
        {
            $user = new User();
            $user->name = "MD AHSAN RABBY";
            $user->email = "admin@gmail.com";
            $user->password = bcrypt('12341234');
            $user->save();
        }
    }
}
