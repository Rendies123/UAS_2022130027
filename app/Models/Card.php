<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'description',
        // Add other relevant fields
    ];

    // Relationship with CardType
    public function cardType()
    {
        return $this->belongsTo(CardType::class, 'type_id');
    }

    // Many-to-many relationship with Decks
    public function decks()
{
    return $this->belongsToMany(Deck::class, 'deck_card')->withTimestamps();
}

    // Scope for view-only cards in a specific deck
    public function scopeViewOnly($query, $deckId)
    {
        return $query->whereHas('decks', function($q) use ($deckId) {
            $q->where('deck_id', $deckId)
              ->where('is_view_only', true);
        });
    }
}
