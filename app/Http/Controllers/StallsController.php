<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StallsController extends Controller
{
    public function getMutura(){
        return view('mutura');
    }
    public function getRadio(){
        return view('radio');
    }
}
