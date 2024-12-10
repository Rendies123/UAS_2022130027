<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CardType;

class CardSeeder extends Seeder
{
    public function run()
    {
        // First, get the IDs for each card type
        $cardTypes = [
            'Spell Card' => CardType::where('type_name', 'Spell Card')->first()->id,
            'Trap Card' => CardType::where('type_name', 'Trap Card')->first()->id,
            'Ritual Card' => CardType::where('type_name', 'Ritual Card')->first()->id,
            'Pendulum Card' => CardType::where('type_name', 'Pendulum Card')->first()->id,
            'Effect Monster Card' => CardType::where('type_name', 'Effect Monster Card')->first()->id,
            'Normal Monster Card' => CardType::where('type_name', 'Normal Monster Card')->first()->id,
            'Xyz Card' => CardType::where('type_name', 'Xyz Card')->first()->id,
            'Fusion Card' => CardType::where('type_name', 'Fusion Card')->first()->id,
            'Link Card' => CardType::where('type_name', 'Link Card')->first()->id,
            'Synchro Monster Card' => CardType::where('type_name', 'Synchro Monster Card')->first()->id,
        ];

        $cards = [
            [
                'name' => 'Beast Rage',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/9999961.jpg',
            ],
            [
                'name' => 'Triamid Fortress',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/9989792.jpg',
            ],
            [
                'name' => 'Imperial Custom',
                'type_id' => $cardTypes['Trap Card'],
                'photo' => 'public/9995766.jpg',
            ],
            [
                'name' => 'Earthbound Fusion',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99599062.jpg',
            ],
            [
                'name' => 'Megalith Bethor',
                'type_id' => $cardTypes['Ritual Card'],
                'photo' => 'public/99628747.jpg',
            ],
            [
                'name' => 'Abyss Actor-Funky Comedian',
                'type_id' => $cardTypes['Pendulum Card'],
                'photo' => 'public/99634927.jpg',
            ],
            [
                'name' => 'Sylvan Komushroomo',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99641328.jpg',
            ],
            [
                'name' => 'Gem-Knight Lapis',
                'type_id' => $cardTypes['Normal Monster Card'],
                'photo' => 'public/99645428.jpg',
            ],
            [
                'name' => 'Asleep at the Switch',
                'type_id' => $cardTypes['Trap Card'],
                'photo' => 'public/99657399.jpg',
            ],
            [
                'name' => 'Dragon Mastery',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99659159.jpg',
            ],
            [
                'name' => 'Jinzo-Layered',
                'type_id' => $cardTypes['Xyz Card'],
                'photo' => 'public/99666430.jpg',
            ],
            [
                'name' => 'Stellarknight Procyon',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99668578.jpg',
            ],
            [
                'name' => 'World Legacy Succession',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99674361.jpg',
            ],
            [
                'name' => 'Shiens Footsoldier',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99675356.jpg',
            ],
            [
                'name' => 'Gravekeepers Vassal',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99690140.jpg',
            ],
            [
                'name' => 'Raidraptor-Noir Lanius',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99707692.jpg',
            ],
            [
                'name' => 'Dokurorider',
                'type_id' => $cardTypes['Ritual Card'],
                'photo' => 'public/99721536.jpg',
            ],
            [
                'name' => 'XZ-Tank Cannon',
                'type_id' => $cardTypes['Fusion Card'],
                'photo' => 'public/99724761.jpg',
            ],
            [
                'name' => 'Tri-Brigade Shuraig the Ominous Omen',
                'type_id' => $cardTypes['Link Card'],
                'photo' => 'public/99726621.jpg',
            ],
            [
                'name' => 'Stegocyber',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99733359.jpg',
            ],
            [
                'name' => 'Shadow-Imprisoning Mirror',
                'type_id' => $cardTypes['Trap Card'],
                'photo' => 'public/99735427.jpg',
            ],
            [
                'name' => 'Rescue Hedgehog',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99742859.jpg',
            ],
            [
                'name' => 'Danger!? Tsuchinoko?',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99745551.jpg',
            ],
            [
                'name' => 'Legendary Fiend',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99747800.jpg',
            ],
            [
                'name' => 'Meteor Rush-Monochroid',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99748883.jpg',
            ],
            [
                'name' => 'Alpha the Magnet Warrior',
                'type_id' => $cardTypes['Normal Monster Card'],
                'photo' => 'public/99785935.jpg',
            ],
            [
                'name' => 'Blasting Fuse',
                'type_id' => $cardTypes['Trap Card'],
                'photo' => 'public/99788587.jpg',
            ],
            [
                'name' => 'Dark Magic Curtain',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99789342.jpg',
            ],
            [
                'name' => 'Phantasos, the Dream Mirror Foe',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99792080.jpg',
            ],
            [
                'name' => 'Ghostrick Mansion',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99795.jpg',
            ],
            [
                'name' => 'Sari of the Sylverwing Axe',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99801464.jpg',
            ],
            [
                'name' => 'Submarineroid',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99861526.jpg',
            ],
            [
                'name' => 'Wind Effigy',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99865167.jpg',
            ],
            [
                'name' => 'Gravekeepers Cannonholder',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99877698.jpg',
            ],
            [
                'name' => 'Marincess Pascalus',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99885917.jpg',
            ],
            [
                'name' => 'Trickstar Bouquet',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99890852.jpg',
            ],
            [
                'name' => 'Skull Flame',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99899504.jpg',
            ],
            [
                'name' => 'Chow Chow Chan',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99902789.jpg',
            ],
            [
                'name' => 'Mokey Mokey Adrift',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99910751.jpg',
            ],
            [
                'name' => 'Predaplant Drosophyllum Hydra',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99913726.jpg',
            ],
            [
                'name' => 'Naturia Exterio',
                'type_id' => $cardTypes['Fusion Card'],
                'photo' => 'public/99916754.jpg',
            ],
            [
                'name' => 'Adamancipator Friend',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99927991.jpg',
            ],
            [
                'name' => 'Mudora the Sword Oracle',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99937011.jpg',
            ],
            [
                'name' => 'TG Star Guardian',
                'type_id' => $cardTypes['Synchro Monster Card'],
                'photo' => 'public/99937842.jpg',
            ],
            [
                'name' => 'Frost Blast of the Monarchs',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99940363.jpg',
            ],
            [
                'name' => 'Taotie, Shadow of the Yang Zing',
                'type_id' => $cardTypes['Effect Monster Card'],
                'photo' => 'public/99946920.jpg',
            ],
            [
                'name' => 'Rescue!',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99984170.jpg',
            ],
            [
                'name' => 'Fiendsmith in Paradise',
                'type_id' => $cardTypes['Trap Card'],
                'photo' => 'public/99989863.jpg',
            ],
            [
                'name' => 'Raijin the Breakbolt Star',
                'type_id' => $cardTypes['Fusion Card'],
                'photo' => 'public/99991455.jpg',
            ],
            [
                'name' => 'Recycling Batteries',
                'type_id' => $cardTypes['Spell Card'],
                'photo' => 'public/99995595.jpg',
            ],
        ];
        DB::table('cards')->delete();
        DB::table('cards')->insert($cards);
    }

}
