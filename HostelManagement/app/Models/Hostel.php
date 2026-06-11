<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $fillable = ['hostel_name', 'location'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}