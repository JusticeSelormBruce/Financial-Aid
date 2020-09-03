<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
      
    public function labels()
    {
        return $this->hasMany(Labels::class);
    }
    public function values()
    {
        return $this->hasMany(Values::class);
    }
}
