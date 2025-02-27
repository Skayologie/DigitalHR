<?php

namespace Database\Seeders;

use App\Models\department;
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
        User::factory()->create([
            'name' => 'jawad admin',
            'email' => 'admin@example.com',
            'password' => '12345678',
            'salary'=>20000,
            'phone_number'=>0632773027,
            'address'=>"",
            "department_id"=>department::factory()
        ]);
        User::factory(10)->create();
    }
}
