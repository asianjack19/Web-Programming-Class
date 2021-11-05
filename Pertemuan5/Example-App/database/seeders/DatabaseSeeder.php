<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Michael AD",
            'email' => "michaeladriel080801@gmail.com",
            'password' =>"testtesttest"
        ]);
        User::create([
            'name' => "Jackson",
            'email' => "jackson@gmail.com",
            'password' =>"testtesttest"
        ]);
        User::create([
            'name' => "Johnson",
            'email' => "johnson@gmail.com",
            'password' =>"testtesttest"
        ]);
        User::create([
            'name' => "Jameson",
            'email' => "jameson@gmail.com",
            'password' =>"testtesttest"
        ]);
        User::create([
            'name' => "Jonathan",
            'email' => "jonathan@gmail.com",
            'password' =>"testtesttest"
        ]);
    }
}
