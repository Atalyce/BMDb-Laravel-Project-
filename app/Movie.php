<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'genreid', 'rating','desc', 'userid', 'picture'
    ];
    // Buat nyambungin genreid sama userid ke movienya
    public function user()
    {
        return $this->hasOne('App\User','id','userid');
    }
    public function genre()
    {
        return $this->hasOne('App\Genre','id','genreid');
    }
}
