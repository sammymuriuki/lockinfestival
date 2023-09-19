<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'slug',
    ];
    public function stalls(){
        $this->hasMany('App\Stall');
    }
}
