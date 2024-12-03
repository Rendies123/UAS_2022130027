<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\CardType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'type_id' => CardType::inRandomOrder()->first()->id, // Assuming you have card types set up
            'attribute' => $this->faker->word,
            'image_url' => $this->faker->imageUrl,
        ];
    }
}
