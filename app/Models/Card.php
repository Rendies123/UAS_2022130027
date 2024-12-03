<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    // Define the many-to-many relationship with Deck
    public function decks()
    {
        return $this->belongsToMany(Deck::class, 'deck_cards');
    }

    // Define the relationship to CardType (assuming you have a CardType model)
    public function type()
    {
        return $this->belongsTo(CardType::class, 'type_id'); // Assuming 'type_id' is the foreign key in the cards table
    }
}
