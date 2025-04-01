<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    use HasFactory;

    protected $table = 'army_corps'; 

    protected $fillable = [
        'denomination_ac' 
    ];

public function Soldier()
{
    return $this->hasMany('App\Models\Soldier');
}

}