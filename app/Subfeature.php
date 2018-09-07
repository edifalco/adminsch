<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfeature extends Model
{
    protected $fillable = ['feature_id','author','content', 'is_active', 'photo_id', 'title', 'order'];
    
    public function feature()
    {
        return $this->belongsTo('App\Feature');
    }
    
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
