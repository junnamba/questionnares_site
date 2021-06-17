<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multiple extends Model
{
    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
    public function answers()
    {
       
        return $this->hasMany(Answer::class);
    }
}
