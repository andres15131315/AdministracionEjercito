<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company_barrack extends Model
{

public function Company()
{
    return $this->belongsTo('App\Models\Company');
}

}
