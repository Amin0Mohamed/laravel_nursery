<?php

namespace App\Http\Controllers\Dashboard;

use App\advertis;
use App\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{

    public function index()
    {
        $sections = Section::paginate(4);
        return view('dashboard.Sections.index',compact('sections'));
    }


    public function create()
    {
        $last_users = User::all();
        return view('dashboard.Sections.create',compact('last_users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'desc'=>'required',
                'available'=>'required',
            ]
        );
        $change = new Section($request->all());
        $change->Name = $request->input('name');
        $change->Desc = $request->input('desc');
        $change->Available = $request->input('available');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.Sections.index');
    }


    public function show($id)
    {

    }
    public function edit($id)
    {
        $last_users = User::all();
        $change = Section::find($id);
        return view('dashboard.Sections.edit',compact('change','last_users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'desc'=>'required',
                'available'=>'required',
            ]
        );
        $change = Section::find($id);
        $change->Name = $request->input('name');
        $change->Desc = $request->input('desc');
        $change->Available = $request->input('available');
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Sections.index');
    }

    public function destroy($sid)
    {
        $sec =Section::find($sid);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Sections.index');
    }
}
