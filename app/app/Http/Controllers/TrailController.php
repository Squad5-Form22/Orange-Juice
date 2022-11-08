<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrailController extends Controller
{
    public function index($trail_name) {

        
        return view('trail')->with(['trail_name' => $trail_name]);
    }
}
