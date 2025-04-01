<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class externCadidate extends Model
{
    protected $fillable = [
        'name', 
        'gender',
        'number', 
        'mail', 
        'college',
        'event',
        'event_name',
        'reciept',
   ];
}
