<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies'; 

    protected $fillable = [
        'primary_activity_company' 
        
    ];
   
public function company_barrack()
{
    return $this->hasOne('App\Models\company_barrack');
}

}
