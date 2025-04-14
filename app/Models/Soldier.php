<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    
    public function armyCorp()
    {
        return $this->belongsTo('App\Models\ArmyCorp');
    }

    public function barrack()
    {
        return $this->belongsTo('App\Models\Barrack');
    }

    public function companies()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
