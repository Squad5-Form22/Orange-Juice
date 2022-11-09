<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Topic;
use App\Models\Trail;

use App\Models\TrailToTopics;

class TrailController extends Controller
{
    public function index($trail_id) {
        $trail = Trail::where('id', $trail_id);

        $topics = $trail->topics;
        // $topics = TrailToTopics::where('trail_id', $trail_id)->get();
        return view('trail')->with(['trail_name' => $trail, 'topics' => $topics]);
    }
}
