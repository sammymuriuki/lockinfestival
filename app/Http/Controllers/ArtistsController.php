<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\ArtworkArtist;
use App\Artwork;

class ArtistsController extends Controller
{
    public function getArtists(){
        $artists = Artist::where('type', 'artist')->get();
        return view('artists', ['artists'=>$artists]);
    }
    public function getDjs(){
        $artists = Artist::where('type', 'dj')->get();
        return view('djs', ['artists'=>$artists]);
    }
    public function getArtist($slug){
        $artist= Artist::where('slug', $slug)->first();
        if($artist){
            return view('artist', ['artist'=>$artist]);
        }
        return view('404notfound');
        
    }
    public function getLiveStream($slug){
        $artist = Artist::where('slug', $slug)->first();
        if($artist){
            return view('livestream', ['artist'=>$artist]);
        }
        return view('404notfound');
        
    }

    public function getGalleryArtists(){
        $artists = ArtworkArtist::all();
        return view('gallery-artists', ['artists'=>$artists]);
    }
    public function getArtistGallery($artist_slug){
        // get this artist first
        $artist = ArtworkArtist::where('slug', $artist_slug)->first();
        if($artist){
            $artworks = Artwork::where('artwork_artist_id', $artist->id)->get();
            if($artworks){
                return view('gallery', ['artworks'=>$artworks]);
            }
            return view('404notfound');
       }
       return view('404notfound');
        
    }
    public function getArtworkArtist($artist_slug){
        $artist = ArtworkArtist::where('slug', $artist_slug)->first();
        if($artist){
            return view('gallery-artist', ['artist'=>$artist]);
        }
        return view('404notfound');
    }
    
}
