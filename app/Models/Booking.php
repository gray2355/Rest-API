<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'pertunjukan_id',
        'ticket_category',
        'quantity',
        'ticket_price',
        'total_price',
    ];

    public function pertunjukan()
    {
        return $this->belongsTo(Pertunjukan::class);
    }
}
