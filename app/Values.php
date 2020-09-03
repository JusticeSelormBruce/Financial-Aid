<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Values extends Model
{
     
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
