<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\AuthorsTableSeeder;
use Database\Seeders\BooksTableSeeder;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AuthorsTableSeeder::class,
            BooksTableSeeder::class
        ]);

    }
}
