<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class extfinaldat extends Model
{
    protected $fillable = [
        'name', 
        'number',
        'mail', 
        'college_name', 
        'event',
        'amount'
   ];
}
