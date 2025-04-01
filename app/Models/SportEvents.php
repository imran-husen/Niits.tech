<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportEvents extends Model
{
    protected $fillable = [
        'name', 
        'roll_number',
        'number', 
        'course', 
        'branch',
        'year',
        'event_name',
        'amount',
   ];
}
