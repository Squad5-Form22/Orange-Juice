<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Topic;
use App\Models\Trail;

use App\Models\TrailToTopics;
use Illuminate\Support\Facades\Auth;

class TrailController extends Controller
{
    public function index($trail_id) {
        $topics = Trail::with('topics')->findOrFail($trail_id);
        
        return view('trail/'.$trail_id)->with(['user'=>Auth::user(), 'topics'=>$topics]);
    }
}
