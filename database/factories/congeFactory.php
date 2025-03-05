<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\conge>
 */
class congeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        return [
            "user_id"=>User::inRandomOrder()->value('id'),
            "start_at"=>Carbon::now()->toDateTimeString(),
            "status"=>fake()->randomElement(['pending', 'accepted', 'refused']),
            "duration"=>rand(10,28),
            "end_at"=>"2025-03-05"
        ];
    }
}
