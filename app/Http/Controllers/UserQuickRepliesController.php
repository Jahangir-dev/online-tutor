<?php

namespace App\Http\Controllers;

use App\Models\UserQuickReplies;
use Illuminate\Http\Request;
use Auth;
class UserQuickRepliesController extends Controller
{

    public function create_new_quick_reply(Request $request)
    {   

        $new = new UserQuickReplies();
        $new->title = $request->title;    
        $new->description = $request->description;    
        $new->user_id = Auth::user()->id;
        $new->save();
        return 1;
    }

}
