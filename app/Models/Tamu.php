<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    public function Bookings()
    {
        return $this->hasOne(Bookings::class,"id","jen_kmr");
    }
}