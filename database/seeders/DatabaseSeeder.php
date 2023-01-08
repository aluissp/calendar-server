<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::factory(25)->create();

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => '$2y$10$vTi3uaiD/B/SG8Q5gE6.cOkeICzz1fX3EjEsCP7zvVvX1qY8MurxO' // test1234
        ]);

        $this->call([
            EventSeeder::class
        ]);
    }
}