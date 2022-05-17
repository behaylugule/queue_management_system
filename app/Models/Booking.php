<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function time()
    {
        return $this->belongsTo(Time_Table::class,'time_id');
    }

    public function usersCount()
    {
        return $this->belongsToMany(User::class,'item__user__counts','itemId','userId').withPivot('count');
    }
}
