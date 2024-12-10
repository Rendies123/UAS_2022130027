<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'user_id',  // Add user_id here to allow mass assignment
    ];

    // Define the relationship with the Card model
    public function cards()
    {
    return $this->belongsToMany(Card::class, 'deck_card')->withTimestamps();
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
