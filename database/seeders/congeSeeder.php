<?php

namespace Database\Seeders;

use App\Models\Conge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class congeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Conge::factory()->count(3)->create();
    }
}
