<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrack extends Model
{
    use HasFactory;

    protected $table = 'barracks'; 

    protected $fillable = [
        'name_barrack', 
        'location'
    ];


    public function Soldier()
    {
        return $this->hasMany('App\Models\Soldier');
    }

    public function ArmyCorp()
    {
        return $this->belongsToMany('App\Models\ArmyCorp');
    }

    public function company_barrack()
    {
        return $this->hasOne('App\Models\company_barrack');
    }
}