<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Articles;
use App\Nursery;
use App\Question;
use App\Register;
use App\Section;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class profilecontroller extends Controller
{
    public function profileuser(){
        $uid = Session::get('Uid');
        $user = User::where('Uid',$uid)->get();
        $section=Section::where('ownerID',$uid)->get();
        $nursery=Nursery::where('ownerID',$uid)->get();
        $question=Question::where('ownerID',$uid)->get();

        $answer=Answer::where('ownerID',$uid)->first();

        $register=Register::where('ownerID',$uid)->get();

        $blog=Articles::where('ownerID',$uid)->get();
        return view('frontend.ProfileUser',compact('user','section','nursery','question','answer','register','blog'));
    }
}
