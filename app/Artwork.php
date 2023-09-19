<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = [
        'title', 'slug','image', ' description'
    ];
    public function artworkArtist(){
        $this->belongsTo('App\ArtworkArtist');
    }
}
