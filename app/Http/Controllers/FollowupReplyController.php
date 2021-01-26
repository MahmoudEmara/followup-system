<?php

namespace App\Http\Controllers;

use App\FollowupReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowupReplyController extends Controller
{
    public function store(){
        $reply = new FollowupReply();
        $reply->message = request('msg');
        $reply->followup_id = request('followup_id');
        $reply->from_id  = Auth::user()->id;
        $reply->save();
        return redirect()->route('followups.index');
    }
}
