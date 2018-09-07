<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use Sluggable;
   
    protected $fillable = ['user_id', 'photo_id', 'title', 'content'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
    
    public function subfeature()
    {
        return $this->hasMany('App\Subfeature');
    }

}
