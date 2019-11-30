<?php

namespace App\Http\Controllers\Dashboard;

use App\Answer;
use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswersController extends Controller
{

    public function index()
    {
        $answers = Answer::paginate(4);
        return view('dashboard.Answers.index',compact('answers'));
    }


    public function create()
    {
        return view('dashboard.Answers.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'detail'=>'required',
                'aSt'=>'required',
            ]
        );
        $change = new Answer($request->all());
        $change->Detail = $request->input('detail');
        $change->aSt = $request->input('aSt');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.Answers.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $change = Answer::find($id);
        return view('dashboard.Answers.edit',compact('change'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'detail'=>'required',
                'aSt'=>'required',
            ]
        );
        $change = Answer::find($id);
        $change->Detail = $request->input('detail');
        $change->aSt = $request->input('aSt');
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Answers.index');
    }


    public function destroy($id)
    {
        $sec =Answer::find($id);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Answers.index');
    }
}
