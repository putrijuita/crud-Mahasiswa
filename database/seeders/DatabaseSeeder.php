<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Syawal',
            'email' => 'me@syawal.com',
            'password' => Hash::make('123')
        ]);
        User::create([
            'name' => 'sera',
            'email' => 'sera@gmail.com',
            'password' => Hash::make('sera')
        ]);
    }
}
