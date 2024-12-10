<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        'description',
        'is_active'  // Good addition for active/inactive status
    ];

    // Relationship with Cards
    public function cards()
    {
        return $this->hasMany(Card::class, 'type_id');
    }

    // Scope for active card types
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
