<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'species',
    ];

    /**
     * Provide a `species` accessor that maps to `type` if present.
     * This keeps backward compatibility with frontend code expecting `species`.
     */
    public function getSpeciesAttribute()
    {
        if (array_key_exists('type', $this->attributes) && $this->attributes['type'] !== null) {
            return $this->attributes['type'];
        }

        return $this->attributes['species'] ?? null;
    }
}
