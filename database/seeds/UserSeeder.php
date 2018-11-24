<?php

use App\User;
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
        User::create([
            "name" => "Test User",
            "email" => "test@test.co",
            "password" => bcrypt("password"),
            "picture_path" => "none",
        ]);
    }
}
