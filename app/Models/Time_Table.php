<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Table extends Model
{
    use HasFactory;

    public function time()
    {
        return $this->hasOne(Booking::class,'time_id');
    }
}
