<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurneroController extends Controller
{
    public function turnero(){
        return view('turnero.index');
    }
}
