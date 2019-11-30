<?php

namespace App\Http\Controllers\Dashboard;

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{

    public function index()
    {
        $quest = Question::paginate(4);
        return view('dashboard.Questions.index',compact('quest'));
    }


    public function create()
    {
        $last_users = User::all();
        return view('dashboard.Questions.create',compact('last_users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'detail'=>'required',
                'qSt'=>'required',
                'uid1'=>'required',
            ]
        );
        $change = new Question($request->all());
        $change->Detail = $request->input('detail');
        $change->qSt = $request->input('qSt');
        $change->uid1 = $request->input('uid1');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.Questions.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $last_users = User::all();
        $change = Question::find($id);
        return view('dashboard.Questions.edit',compact('change','last_users'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'detail'=>'required',
                'qSt'=>'required',
                'uid1'=>'required',
            ]
        );
        $change = Question::find($id);
        $change->Detail = $request->input('detail');
        $change->qSt = $request->input('qSt');
        $change->uid1 = $request->input('uid1');
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Questions.index');
    }

    public function destroy($id)
    {
        $sec =Question::find($id);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Questions.index');
    }
}
