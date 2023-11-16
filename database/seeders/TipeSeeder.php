<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipe::factory()->count(2)->sequence(
            ["nama"=> "makanan"],
            ["nama"=> "minuman"],
        )->create();
    }
}
