<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Card::create([
            'name' => 'Blue-Eyes White Dragon',
            'type' => 'Monster',
            'description' => 'A powerful dragon with high attack points.',
        ]);
    }

}
