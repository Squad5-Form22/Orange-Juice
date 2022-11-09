<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Topic;
use App\Models\Trail;

use App\Models\TrailToTopics;

class TrailController extends Controller
{
    public function index($trail_id) {
        $trails = Trail::with('trail_to_topics')->first();
        print_r($trails->topics->toArray());
        
        // return view('trail')->with(['trail_name' => $trail]);
    }
}
