<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('cards')->delete();

        \DB::table('cards')->insert(array (
            0 =>
            array (
                'name' => 'Chain Summoning',
                'type' => 'Spell Card',
                'photo' => 'public/image/9952083.jpg',
            ),
            1 =>
            array (
                'name' => 'Triamid Fortress',
                'type' => 'Spell Card',
                'photo' => 'public/image/9989792.jpg',
            ),
        ));
    }

}
