<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alamat>
 */
class AlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'costumer_id' => mt_rand(3,4),
            'nama' => fake()->name(),
            'no_hp' => fake()->numerify('08##########'),
            'alamat_lengkap' => fake()->address(),
            'kota' =>  fake()->city(),
            'provinsi' => fake()->state(),
            'kode_pos' => fake()->postcode()
        ];
    }
}
