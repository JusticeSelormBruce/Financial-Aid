<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded =[];

    public function student()
    {
       return $this->belongsTo('App\Registed','registeds_id');
    }


}
