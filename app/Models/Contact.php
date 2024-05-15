<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        
        'name',
        'email',
        'phone',
        'message', 
        
    ];
}
