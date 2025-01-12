<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KorbanBanjir;

class KorbanBanjirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KorbanBanjir::factory()->count(150)->create();
    }
}
