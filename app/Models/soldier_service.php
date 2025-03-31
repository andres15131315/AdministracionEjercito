<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoldierService extends Model
{
   
public function soldier()
{
    return $this->belongsTo('App\Models\Soldier');
}

 }
 
