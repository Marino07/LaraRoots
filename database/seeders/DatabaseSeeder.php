<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmployerSeeder::class,
            JobSeeder::class,
        ]);
        // User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Marino',
            'last_name' => 'Pusic',
            'email' => 'marino@example.com',
            'password' => '12345678'
        ]);
    }
}
