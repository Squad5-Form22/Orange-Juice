<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ContentController extends Controller
{
    public function updateContentStatus($id) {
        $content = Content::find($id);
        $content->status === 0 ? $content->status = 1 : $content->status = 0;
        $content->save();
        return $content;
    }
}
