<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtworkArtist extends Model
{
    protected $fillable =['title', 'slug'];
    public function artworks(){
        $this->hasMany('App\Artwork');
    }
}
