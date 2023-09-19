<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
   // return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/livestream/{slug}',[
    'uses' => 'ArtistsController@getLiveStream'
]);
Route::get('/djs',[
    'uses' => 'ArtistsController@getDjs'
]);
Route::get('/artist/{slug}',[
    'uses' => 'ArtistsController@getArtist'
]);
Route::get('/featured', [
    'uses' => 'ArtistsController@getArtists'
]);
Route::get('/artists', [
    'uses' => 'ArtistsController@getArtists'
]);
Route::get('/artworks', [
    'uses' => 'ArtistsController@getGalleryArtists'
]);
Route::get('/gallery/{slug}',[
    'uses' => 'ArtistsController@getArtistGallery'
]);
Route::get('/artworks/artists/{artist_slug}', [
    'uses' => 'ArtistsController@getArtworkArtist'
]);
Route::get('/movies', [
    'uses' => 'MoviesController@getMovies'
]);
Route::get('/movies/{slug}', [
    'uses' => 'MoviesController@getMovie'
]);

Route::get('/kidscorner',[
    'uses' => 'PerformancesController@getKidsCorner'
]);
Route::get('/kidscorner/{slug}', [
    'uses' => 'PerformancesController@getKidsVideo'
]);
Route::get('/masterclasses',[
    'uses' => 'PerformancesController@getMasterclasses'
]);
Route::get('/masterclasses/{slug}',[
    'uses' => 'PerformancesController@getMasterclassVideo'
]);
Route::get('/wellness',[
    'uses' => 'PerformancesController@getWellnessPerformances'
]);
Route::get('/wellness/{slug}',[
    'uses' => 'PerformancesController@getWellnessVideo'
]);
Route::get('/poetry',[
    'uses' => 'PerformancesController@getPoetry'
]);
Route::get('/poetry/{slug}',[
    'uses' => 'PerformancesController@getPoetryVideo'
]);

Route::get('/mutura',[
    'uses' => 'StallsController@getMutura'
]);
Route::get('/radio',[
    'uses' => 'StallsController@getRadio'
]);

Route::get('/vendors', [
    'uses' => 'VendorsController@getVendors'
]);
Route::get('/vendors/{slug}/products', [
    'uses' => 'VendorsController@getVendorProducts'
]);
Route::get('/vendors/{slug}', [
    'uses' => 'VendorsController@getVendorProducts'
]);
Route::get('/podcasts', [
    'uses' => 'PerformancesController@getPodcasts'
]);
Route::get('/podcasts/{slug}', [
    'uses' => 'PerformancesController@getPodcast'
]);
Route::post('/addmail', [
    'uses' => 'UsersController@addmail',
    'as' =>'addmail'
]);
Route::get('/livestreams', [
    'uses' => 'PerformancesController@getLivestreams',
    'as' =>'livestreams'
]);
Route::get('/inmagazine',[
    'uses' => 'PerformancesController@getInMagazine',
  
]);

Route::get('/photographers', [
    'uses' => 'VendorsController@getPhotographers'
]);
Route::get('/photographers/{slug}', [
    'uses' => 'VendorsController@getPhotographerGallery'
]);
Route::get('/nairobi-design-week', [
    'uses' =>'VendorsController@getNairobiDesignWeek'
]);
Route::get('/art-gallery', [
    'uses' =>'PerformancesController@getArtGallery'
]);