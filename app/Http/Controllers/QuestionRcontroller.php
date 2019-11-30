<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class QuestionRcontroller extends Controller
{
    public function QuestionReq(Request $request){
        $registerda = $request->all();
        $ques = Question::create($registerda);
        return back();
    }
    public function QuestionAnsDele($idq,$ida){
        $qu =Question::find($idq);
        $an =Answer::find($ida);
        $qu->delete();
        $an->delete();
        return back();
    }
}
