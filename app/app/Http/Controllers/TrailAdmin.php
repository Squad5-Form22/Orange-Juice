<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Trail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use User;

class TrailAdmin extends Controller
{
    /**
     * Mostra a página inicial do usuário logado admin
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */

    public function index($trail_id) {
        $current_user = Auth::user();

        // $trail = Trail::with('topics')->findOrFail($trail_id)->toArray();
        // $topics_contents = array();
        // foreach($trail['topics'] as $topic) {
        //     $contents = Topic::with('contents')->findOrFail($topic['id'])->toArray();
        //     array_push($topics_contents, $contents);
        // }

        // $completed_contents = User::with('contents')->findOrFail($current_user->id)->toArray();

        // $completed_contents_id = array();

        // foreach($completed_contents['contents'] as $content){
        //     array_push($completed_contents_id, $content['id']);
        // }

        return view('admin.trail')->with([
            'user'=>$current_user,
            // 'trail'=>$trail,
            // 'topics_contents'=>$topics_contents,
            // 'completed_contents_id'=>$completed_contents_id
        ]);
    }
}
