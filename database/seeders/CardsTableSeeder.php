<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\CardType;

class CardsTableSeeder extends Seeder
{
    public function run()
    {
        // Fetch existing card types
        $cardTypes = CardType::all();

        // Find the 'Spell' type ID
        $spellType = $cardTypes->where('type_name', 'Spell Card')->first();

        if ($spellType) {
            // Insert custom card with specific details
            Card::create([
                'name' => 'Chain Summoning',
                'type_id' => $spellType->id, // Use the 'Spell' card type ID
                'attribute' => 'Fire',
                'image_url' => 'https://via.placeholder.com/640x480.png/00aaee?text=rem',
                'is_view_only' => false, // Set default to false if not already specified
            ]);
        } else {
            // Log a warning if the 'Spell' type is not found
            \Log::warning('Card type "Spell Card" not found in the database.');
        }

        // Create additional random cards using factory
        Card::factory()->count(10)->create(); // Adjust the count as needed
    }
}
