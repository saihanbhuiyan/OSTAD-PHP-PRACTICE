<?php

namespace Database\Seeders;
use Database\Seeders\taskSeeder;

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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
// akhaneo taskSeeder k use kore nite hobe tanahole kaj korbena 
        $this->call(taskSeeder::class);
    }
}
//DATABASESEEDER.PHP TE KI KORBO?
        //1)use app\Models\task; DATABASESEEDER A AMRA PROTHOMOTO tasksEEDER namok moder K USE KORBO
        //2)THEN run() void namok methode taskSeeder k call koredibo...$this->call(taskSeeder::class);
        //THEN php artisan db:seed kore run korbo 