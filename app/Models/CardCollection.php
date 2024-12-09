<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCollection extends Model
{
    use HasFactory;

    protected $table = 'card_collections'; // Ensure this matches the table name

    protected $fillable = [
        'name',
        'user_id',
        'description'
    ];

    /**
     * Relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship with multiple cards using many-to-many
     */
    public function cards()
    {
        return $this->belongsToMany(Card::class, 'card_collection_card')
                    ->withPivot('quantity') // Include quantity in the relationship
                    ->withTimestamps(); // Include created_at and updated_at
    }

    /**
     * Add a card to the collection
     */
    public function addCard(Card $card, $quantity = 1)
    {
        $existingCard = $this->cards()->where('card_id', $card->id)->first();

        if ($existingCard) {
            // If card exists, update the quantity
            $this->cards()->updateExistingPivot($card->id, [
                'quantity' => $existingCard->pivot->quantity + $quantity
            ]);
        } else {
            // If card doesn't exist, attach it
            $this->cards()->attach($card->id, ['quantity' => $quantity]);
        }
    }

    /**
     * Remove a card from the collection
     */
    public function removeCard(Card $card, $quantity = null)
    {
        $existingCard = $this->cards()->where('card_id', $card->id)->first();

        if ($existingCard) {
            if ($quantity === null || $quantity >= $existingCard->pivot->quantity) {
                // Remove the entire card entry
                $this->cards()->detach($card->id);
            } else {
                // Reduce the quantity
                $this->cards()->updateExistingPivot($card->id, [
                    'quantity' => $existingCard->pivot->quantity - $quantity
                ]);
            }
        }
    }

    /**
     * Get total number of cards in the collection
     */
    public function getTotalCardsAttribute()
    {
        return $this->cards()->sum('quantity');
    }

    /**
     * Scope to find collections by user
     */
    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
