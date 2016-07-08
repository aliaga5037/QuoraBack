<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function anwers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

