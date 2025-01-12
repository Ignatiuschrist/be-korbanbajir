<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Daerah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KorbanBanjir>
 */
class KorbanBanjirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'daerah_id' => Daerah::inRandomOrder()->first()->id,
            'nama'      => $this->faker->name,
            'alamat'    => $this->faker->address,
            'umur'      => $this->faker->numberBetween(18, 25),
        ];
    }
}
