<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Topic;
use App\Models\TopicTrail;
use App\Models\Trail;

use App\Models\TrailToTopics;
use Illuminate\Support\Facades\Auth;

class TrailController extends Controller
{
    public function index($trail_id) {
        $trail = Trail::with('topics')->findOrFail($trail_id)->toArray();
        dd($trail);
        // return ['user'=>Auth::user(), 'trail'=>$trail];

        // $topics = Topic::with('contents')->findOrFail(2)->toArray();
        // return ['topics' => $topics];
    }
}
