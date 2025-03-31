<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    
    public function armycorp()
    {
        return $this->belongsTo('App\Models\Armycorp');
    }

    public function barracks()
    {
        return $this->belongsTo('App\Models\Barrack');
    }

    public function soldier_service()
    {
        return $this->hasMany('App\Models\Soldier_Service');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
