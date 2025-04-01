<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    
    public function ArmyCorp()
    {
        return $this->belongsTo('App\Models\ArmyCorp');
    }

    public function Barrack()
    {
        return $this->belongsTo('App\Models\Barrack');
    }

    public function soldier_service()
    {
        return $this->hasMany('App\Models\soldier_service');
    }

    public function Company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
