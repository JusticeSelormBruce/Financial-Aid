<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $guarded  = [];

   public function registed()
   {
    return $this->belongsTo('App\Registed','registeds_id');
   }
   public function country()
   {
       return $this->belongsTo(Country::class);
   }
}
