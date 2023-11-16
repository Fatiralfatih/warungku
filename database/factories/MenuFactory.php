<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        return [
            'user_id' => mt_rand(1,4),
            'nama' => $this->faker->sentence(),
            'harga' => $this->faker->numerify('2####'),
            'status' => rand(0,1),
            'stok'=> 10,
            'deskripsi' => $this->faker->paragraph(),
            'tipe_id'=> mt_rand(1,2),
        ];
    }
}
