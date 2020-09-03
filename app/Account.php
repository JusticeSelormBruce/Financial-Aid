<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded =[];
    public function student()
     {
        return $this->belongsTo('App\Registed','registed_id');
     }
}
