<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "ali hassan",
            "email" => "alihh@gmail.com",
            "password" => Hash::make("123456789")
            ]);

        User::create([
            "name" => "ahmed mohamed",
            "email" => "ahmed@gmail.com",
            "password" => Hash::make("123456789")
            ]);

        User::create([
            "name" => "mohamed ashraf",
            "email" => "mohamed@gmail.com",
           "password" => Hash::make("123456789")
            ]);

        User::create([
            "name" => "soad hosny",
            "email" => "soad@gmail.com",
            "password" => Hash::make("123456789")
            ]);

        User::create([
            "name" => "yasser ebrahim",
            "email" => "yasso@gmail.com",
            "password" => Hash::make("123456789")
        ]);

        User::create([
            "name" => "yara adel",
            "email" => "yara@gmail.com",
            "password" => Hash::make("123456789")
        ]);

        User::create([
            "name" => "mohamed wageh",
            "email" => "wageh@gmail.com",
            "password" => Hash::make("123456789")
        ]);

        User::create([
            "name" => "sally taha",
            "email" => "sally@gmail.com",
            "password" => Hash::make("123456789")
        ]);

        User::create([
            "name" => "ebrahim elhawary",
            "email" => "ebrahim@gmail.com",
            "password" => Hash::make("123456789")
        ]);
    }
}
