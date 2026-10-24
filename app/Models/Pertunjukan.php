<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pertunjukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'date',
        'time',
        'price_domestic',
        'price_foreign',
        'quota',
        'description',
        'image',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
