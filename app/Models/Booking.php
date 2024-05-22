<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_title',
        'room_type',
        'name',
        'email',
        'phone',
        'start_date', 
        'end_date',
    ];


    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'room_id', 'id');
    }
}
