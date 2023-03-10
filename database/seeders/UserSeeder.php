<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'name' => 'faiq',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'admin utama',
            // dan seterusnya
        ]);
    }
}
