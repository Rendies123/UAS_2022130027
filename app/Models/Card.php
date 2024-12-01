<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
use HasFactory;
// app/Models/Card.php
public function decks()
{
    return $this->belongsToMany(Deck::class, 'deck_card');
}

}
