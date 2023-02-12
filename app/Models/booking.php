<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }
}