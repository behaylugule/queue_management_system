<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'time_id',
        'item_take_time',
        'items',
    ];

 public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function time(){
    return $this->belongsTo(Time_Table::class, 'time_id');
  }
}
