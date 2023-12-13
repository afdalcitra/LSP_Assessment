<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'brand',
        'description',
        'stock_quantity',
        'rental_price',
        'condition',
    ];

    public function reservations()
{
    return $this->hasMany(Reservation::class);
}

}
