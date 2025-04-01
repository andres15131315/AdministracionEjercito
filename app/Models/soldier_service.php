<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soldier_service extends Model
{
   
public function Soldier()
{
    return $this->belongsTo('App\Models\Soldier');
}

 }
 
