<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registed extends Model
{
    protected $guarded =[];

    public function scores()
    {
            return $this->hasOne(Score::class);
    }
    public function form()
    {
            return $this->hasOne(Form::class);
    }
}
