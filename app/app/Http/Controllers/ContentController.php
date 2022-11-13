<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\ContentUser;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function updateContentStatus($content_id) {
        
        $content_id = intval($content_id);

        $current_user = Auth::user();
        $completed_content = new ContentUser;

        $result = ContentUser::whereRaw('content_id = ? and user_id = ?', [$content_id, $current_user->id])->delete();
        
        if($result == 0) {
            $completed_content = new ContentUser;
            $completed_content->user_id = $current_user->id;
            $completed_content->content_id = $content_id;
            
            $completed_content->save();
        }

        return $completed_content;
    }
}
