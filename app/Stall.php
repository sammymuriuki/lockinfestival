<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    protected $fillable = [
        'title', 'slug'
    ];
    public function category(){
        $this->belongsTo('App\Category');
    }
    public function subCategory(){
        $this->belongsTo('App\SubCategory');
    }
}
