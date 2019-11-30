<?php

namespace App\Http\Controllers\Dashboard;

use App\Articles;
use App\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticalsController extends Controller
{

    public function index()
    {
        $articals = Articles::paginate(4);
        return view('dashboard.Articals.index',compact('articals'));
    }

    public function create()
    {
//        $last_user = User::all()->last();
        $last_users = User::all();
        return view('dashboard.Articals.create',compact('last_users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required',
            ]
        );
        $change = new Articles($request->all());
        $change->title = $request->input('title');
        $change->content = $request->input('content');
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $change->image = $imageName;
        $change->save();
        return redirect()->route('dashboard.Articals.index')->with('success','Item created successfully!');
//        session()->flash('success',__('site.added_successfully'));
//        return redirect()->route('dashboard.Articals.index');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $last_users = User::all();
        $change = Articles::find($id);
        return view('dashboard.Articals.edit',compact('last_users','change'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required',
                'image'=>'required',
            ]
        );
        $change = Articles::find($id);
        $change->title = $request->input('title');
        $change->content = $request->input('content');
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $change->image = $imageName;
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Articals.index');
    }

    public function destroy($id)
    {
        $sec =Articles::find($id);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Articals.index');
    }
}
