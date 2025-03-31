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


    public function soldiers()
    {
        return $this->hasMany('App\Models\Soldier');
    }

    public function armycorps()
    {
        return $this->belongsToMany('App\Models\Armycorp');
    }

    public function company_headquarters()
    {
        return $this->hasOne('App\Models\company_barrack');
    }
}