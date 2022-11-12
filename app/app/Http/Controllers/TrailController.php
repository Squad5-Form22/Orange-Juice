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
        $topics_contents = array();
        foreach($trail['topics'] as $topic) {
            $contents = Topic::with('contents')->findOrFail($topic['id'])->toArray();
            array_push($topics_contents, $contents);
        }

        return view('trail')->with(['user'=>Auth::user(), 'trail'=>$trail, 'topics_contents'=>$topics_contents]);
    }
}
