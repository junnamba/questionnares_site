<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['content','title'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
