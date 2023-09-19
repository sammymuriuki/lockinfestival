<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Performance;

class Artist extends Model
{
    protected $fillable = [
        'title', 'slug', 'public_id', 'image'
    ];

    public function performances(){
        $this->hasMany('App\Performance');
    }
}
