<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labels extends Model
{
    
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
