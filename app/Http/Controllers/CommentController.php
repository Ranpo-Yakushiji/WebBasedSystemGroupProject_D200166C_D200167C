<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Comment;
use App\Models\Game;
use Auth;
use Session;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function add(){
        $r=request();
        $addComment=Comment::create([
            'comment'=>$r->comment,
            'userID'=>Auth::id(),
        ]);

        Session::flash('success', "Comment Posted!");
        return redirect()->route('games');
        
    }

}
