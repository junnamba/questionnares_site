<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Multiple;

class Choice extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
     public function multiples()
    {
        return $this->hasMany(Multiple::class);
    }
      public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    
}
