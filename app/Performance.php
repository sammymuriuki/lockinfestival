<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
        'title', 'slug',
    ];
    public function artist(){
        $this->belongsTo('App\Artist');
    }
}
