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
        $trail = Trail::with('topics')->findOrFail($trail_id);
        
        return ['user'=>Auth::user(), 'trail'=>$trail];
    }
}
