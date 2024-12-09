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
                'name' => 'Beast Rage',
                'type' => 'Spell Card',
                'photo' => 'public/9999961.jpg',
            ),
            1 =>
            array (
                'name' => 'Triamid Fortress',
                'type' => 'Spell Card',
                'photo' => 'public/9989792.jpg',
            ),
            2 =>
            array (
                'name' => 'Imperial Custom',
                'type' => 'Trap Card',
                'photo' => 'public/9995766.jpg',
            ),
            3 =>
            array (
                'name' => 'Earthbound Fusion',
                'type' => 'Spell Card',
                'photo' => 'public/99599062.jpg',
            ),
            4 =>
            array (
                'name' => 'Megalith Bethor',
                'type' => 'Ritual Card',
                'photo' => 'public/99628747.jpg',
            ),
            5 =>
            array (
                'name' => 'Abyss Actor-Funky Comedian',
                'type' => 'Pendulum Card',
                'photo' => 'public/99634927.jpg',
            ),
            6 =>
            array (
                'name' => 'Sylvan Komushroomo',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99641328.jpg',
            ),
            7 =>
            array (
                'name' => 'Gem-Knight Lapis',
                'type' => 'Normal Monster Card',
                'photo' => 'public/99645428.jpg',
            ),
            8 =>
            array (
                'name' => 'Asleep at the Switch',
                'type' => 'Trap Card',
                'photo' => 'public/99657399.jpg',
            ),
            9 =>
            array (
                'name' => 'Dragon Mastery',
                'type' => 'Spell Card',
                'photo' => 'public/99659159.jpg',
            ),
            10 =>
            array (
                'name' => 'Jinzo-Layered',
                'type' => 'Xyz Card',
                'photo' => 'public/99666430.jpg',
            ),
            11 =>
            array (
                'name' => 'Stellarknight Procyon',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99668578.jpg',
            ),
            12 =>
            array (
                'name' => 'World Legacy Succession',
                'type' => 'Spell Card',
                'photo' => 'public/99674361.jpg',
            ),
            13 =>
            array (
                'name' => 'Shiens Footsoldier',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99675356.jpg',
            ),
            14 =>
            array (
                'name' => 'Gravekeepers Vassal',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99690140.jpg',
            ),
            15 =>
            array (
                'name' => 'Raidraptor-Noir Lanius',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99707692.jpg',
            ),
            16 =>
            array (
                'name' => 'Dokurorider',
                'type' => 'Ritual Card',
                'photo' => 'public/99721536.jpg',
            ),
            17 =>
            array (
                'name' => 'XZ-Tank Cannon',
                'type' => 'Fusion Card',
                'photo' => 'public/99724761.jpg',
            ),
            18 =>
            array (
                'name' => 'Tri-Brigade Shuraig the Ominous Omen',
                'type' => 'Link Card',
                'photo' => 'public/99726621.jpg',
            ),
            19 =>
            array (
                'name' => 'Stegocyber',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99733359.jpg',
            ),
            20 =>
            array (
                'name' => 'Shadow-Imprisoning Mirror',
                'type' => 'Trap Card',
                'photo' => 'public/99735427.jpg',
            ),
            21 =>
            array (
                'name' => 'Rescue Hedgehog',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99742859.jpg',
            ),
            22 =>
            array (
                'name' => 'Danger!? Tsuchinoko?',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99745551.jpg',
            ),
            23 =>
            array (
                'name' => 'Legendary Fiend',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99747800.jpg',
            ),
            24 =>
            array (
                'name' => 'Meteor Rush-Monochroid',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99748883.jpg',
            ),
            25 =>
            array (
                'name' => 'Alpha the Magnet Warrior',
                'type' => 'Normal Monster Card',
                'photo' => 'public/99785935.jpg',
            ),
            26 =>
            array (
                'name' => 'Blasting Fuse',
                'type' => 'Trap Card',
                'photo' => 'public/99788587.jpg',
            ),
            27 =>
            array (
                'name' => 'Dark Magic Curtain',
                'type' => 'Spell Card',
                'photo' => 'public/99789342.jpg',
            ),
            28 =>
            array (
                'name' => 'Phantasos, the Dream Mirror Foe',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99792080.jpg',
            ),
            29 =>
            array (
                'name' => 'Ghostrick Mansion',
                'type' => 'Spell Card',
                'photo' => 'public/99795.jpg',
            ),
            30 =>
            array (
                'name' => 'Sari of the Sylverwing Axe',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99801464.jpg',
            ),
            31 =>
            array (
                'name' => 'Submarineroid',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99861526.jpg',
            ),
            32 =>
            array (
                'name' => 'Wind Effigy',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99865167.jpg',
            ),
            33 =>
            array (
                'name' => 'Gravekeepers Cannonholder',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99877698.jpg',
            ),
            34 =>
            array (
                'name' => 'Marincess Pascalus',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99885917.jpg',
            ),
            35 =>
            array (
                'name' => 'Trickstar Bouquet',
                'type' => 'Spell Card',
                'photo' => 'public/99890852.jpg',
            ),
            36 =>
            array (
                'name' => 'Skull Flame',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99899504.jpg',
            ),
            37 =>
            array (
                'name' => 'Chow Chow Chan',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99902789.jpg',
            ),
            38 =>
            array (
                'name' => 'Mokey Mokey Adrift',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99910751.jpg',
            ),
            39 =>
            array (
                'name' => 'Predaplant Drosophyllum Hydra',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99913726.jpg',
            ),
            40 =>
            array (
                'name' => 'Naturia Exterio',
                'type' => 'Fusion Card',
                'photo' => 'public/99916754.jpg',
            ),
            41 =>
            array (
                'name' => 'Adamancipator Friend',
                'type' => 'Spell Card',
                'photo' => 'public/99927991.jpg',
            ),
            42 =>
            array (
                'name' => 'Mudora the Sword Oracle',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99937011.jpg',
            ),
            43 =>
            array (
                'name' => 'TG Star Guardian',
                'type' => 'Synchro Monster Card',
                'photo' => 'public/99937842.jpg',
            ),
            44 =>
            array (
                'name' => 'Frost Blast of the Monarchs',
                'type' => 'Spell Card',
                'photo' => 'public/99940363.jpg',
            ),
            45 =>
            array (
                'name' => 'Taotie, Shadow of the Yang Zing',
                'type' => 'Effect Monster Card',
                'photo' => 'public/99946920.jpg',
            ),
            46 =>
            array (
                'name' => 'Rescue!',
                'type' => 'Spell Card',
                'photo' => 'public/99984170.jpg',
            ),
            47 =>
            array (
                'name' => 'Fiendsmith in Paradise',
                'type' => 'Trap Card',
                'photo' => 'public/99989863.jpg',
            ),
            48 =>
            array (
                'name' => 'Raijin the Breakbolt Star',
                'type' => 'Fusion Card',
                'photo' => 'public/99991455.jpg',
            ),
            49 =>
            array (
                'name' => 'Recycling Batteries',
                'type' => 'Spell Card',
                'photo' => 'public/99995595.jpg',
            ),
        ));
    }

}
