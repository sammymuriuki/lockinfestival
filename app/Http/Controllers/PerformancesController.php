<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KidsPerformances;
use App\Masterclass;
use App\WellnessPerformance;
use App\Poetry;
use App\Podcast;

class PerformancesController extends Controller
{
    public function getKidsCorner(){
        $performances = KidsPerformances::all();
        return view('kidscorner', ['performances'=>$performances]);
    }
    public function getKidsVideo($slug){
        $movie = KidsPerformances::where('slug', $slug)->first();
        if($movie){
            return view('moviestream', ['movie'=>$movie]);
        }
        return view('404notfound');
    }
    public function getMasterclasses(){
        $performances = Masterclass::all();
        return view('masterclasses', ['performances'=>$performances]);
    }
    public function getMasterclassVideo($slug){
        $movie = Masterclass::where('slug', $slug)->first();
        if($movie){
            return view('moviestream', ['movie'=>$movie]);
        }
        return view('404notfound');
    }
    public function getWellnessPerformances(){
        $performances = WellnessPerformance::all();
        return view('wellness', ['performances'=>$performances]);
    }
    public function getWellnessVideo($slug){
        $movie = WellnessPerformance::where('slug', $slug)->first();
        if($movie){
            return view('moviestream', ['movie'=>$movie]);
        }
        return view('404notfound');
    }
    public function getPoetry(){
        $performances = Poetry::all();
        return view('poetry', ['performances'=>$performances]);
    }
    public function getPoetryVideo($slug){
        $movie = Poetry::where('slug', $slug)->first();
        if($movie){
            return view('moviestream', ['movie'=>$movie]);
        }
        return view('404notfound');
    }
    public function getPodcasts(){
        $podcasts = Podcast::all();
        return view('podcasts', ['podcasts'=>$podcasts]);    
    }
    public function getPodcast($slug){
        $podcast = Podcast::where('slug', $slug)->first();
        if($podcast){
            return view('podcast', ['podcast'=>$podcast]); 
        }
        return view('404notfound');
           
    }
    public function getInMagazine(){
        return view('inmagazine');
    }
    public function getArtGallery(){
        return view('art-gallery');
    }
}
