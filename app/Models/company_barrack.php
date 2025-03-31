<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company_barrack extends Model
{

public function company()
{
    return $this->belongsTo('App\Models\Company');
}

}
