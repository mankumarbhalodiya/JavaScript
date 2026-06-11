<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_number', 'capacity', 'hostel_id'];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}