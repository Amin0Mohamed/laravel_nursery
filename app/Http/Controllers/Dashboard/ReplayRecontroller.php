<?php

namespace App\Http\Controllers\Dashboard;

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplayRecontroller extends Controller
{
    public function Replayview($qid,$ownerID){
        return view('dashboard.ReplyQue.create',compact('qid','ownerID'));
    }
    public function Replaydata(Request $request)
    {
        if ($request->isMethod('post')) {
            $ans = Answer::create($request->all());
            session()->flash('success',__('site.added_successfully'));
            return back();
        }
        return back();
    }
}
