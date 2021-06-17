<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
     public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
     public function multiple()
    {
        return $this->belongsTo(Multiple::class);
    }
     
}
