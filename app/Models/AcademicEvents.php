<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicEvents extends Model
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
