<?php

namespace App\Http\Controllers;

use App\Followup;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\FollowupCategory;
class FollowupController extends Controller
{

    public function index(){
        $user_id = Auth::user()->id;
        $followups = Followup::where('from_id', $user_id)->orWhere('to_id', $user_id)->get();
        return view('followups', compact('followups'));
    }

    public function create(){
        $categories = FollowupCategory::all();
        $users = User::all();
        return  view('new_followup', compact('users', 'categories'));
    }

    public function store(){
        $flwup = new Followup();
        $flwup->text = request('msg');
        $flwup->to_id = request('to');
        $flwup->from_id = Auth::user()->id;
        $flwup->category_id = request('category');
        $flwup->save();
        return redirect()->route('followups.index');
    }
}
