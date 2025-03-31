<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

public function soldiers()
{
    return $this->hasMany('App\Models\Soldier');
}

}