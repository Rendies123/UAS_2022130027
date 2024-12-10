<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CardType;

class CardTypeSeeder extends Seeder
{
    public function run()
    {
        $cardTypes = [
            ['type_name' => 'Spell Card', 'description' => 'Magic cards that provide various effects', 'is_active' => true],
            ['type_name' => 'Trap Card', 'description' => 'Defensive or reactive cards', 'is_active' => true],
            ['type_name' => 'Effect Monster Card', 'description' => 'Monster cards with special effects', 'is_active' => true],
            ['type_name' => 'Normal Monster Card', 'description' => 'Standard monster cards', 'is_active' => true],
            ['type_name' => 'Ritual Card', 'description' => 'Special summoning ritual cards', 'is_active' => true],
            ['type_name' => 'Fusion Card', 'description' => 'Fusion summon cards', 'is_active' => true],
            ['type_name' => 'Synchro Monster Card', 'description' => 'Synchro summon cards', 'is_active' => true],
            ['type_name' => 'Xyz Card', 'description' => 'Xyz summon cards', 'is_active' => true],
            ['type_name' => 'Pendulum Card', 'description' => 'Pendulum summon cards', 'is_active' => true],
            ['type_name' => 'Link Card', 'description' => 'Link summon cards', 'is_active' => true],
        ];

        CardType::insert($cardTypes);
    }
}
