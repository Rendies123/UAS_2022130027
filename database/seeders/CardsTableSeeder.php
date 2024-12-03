<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardsTableSeeder extends Seeder
{
    public function run()
    {
        Card::factory()->count(10)->create();
    }
}

