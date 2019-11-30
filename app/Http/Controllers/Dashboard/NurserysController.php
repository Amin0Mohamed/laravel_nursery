<?php

namespace App\Http\Controllers\Dashboard;

use App\Nursery;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NurserysController extends Controller
{

    public function index()
    {
        $nursery = Nursery::paginate(4);
        return view('dashboard.Nursery.index',compact('nursery'));
    }


    public function create()
    {
        $last_users = User::all();
        return view('dashboard.Nursery.create',compact('last_users'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'nur_name'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'requirement'=>'required',
                'status'=>'required',
                'desc'=>'required',
                'image1'=>'required',
                'imageT1'=>'required',
            ]
        );
        $change = new Nursery($request->all());
        $change->Nur_name = $request->input('nur_name');
        $change->Address = $request->input('address');
        $change->Phone = $request->input('phone');
        $requers = $request->file('requirement')->getClientOriginalName();
        $request->file('requirement')->move(public_path('productfiles'), $requers);
        $change->Requirement = $requers;
        $change->Status = $request->input('status');
        $change->Desc = $request->input('desc');
        $imageName1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->move(public_path('productimages'), $imageName1);
        $change->image1 = $imageName1;
        $imageName2 = $request->file('imageT1')->getClientOriginalName();
        $request->file('imageT1')->move(public_path('productimages'), $imageName2);

        $change->imageT1 = $imageName2;
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.Nursery.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id1)
    {

        $change = Nursery::find(intval($id1));
        $last_users = User::all();
        return view('dashboard.Nursery.edit',compact('change','last_users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nur_name'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'requirement'=>'required',
                'status'=>'required',
                'desc'=>'required',
                'image1'=>'required',
                'imageT1'=>'required',
            ]
        );
        $change = Nursery::find($id);
        $change->Nur_name = $request->input('nur_name');
        $change->Address = $request->input('address');
        $change->Phone = $request->input('phone');
        $requers = $request->file('requirement')->getClientOriginalName();
        $request->file('requirement')->move(public_path('productfiles'), $requers);
        $change->Requirement = $requers;
        $change->Status = $request->input('status');
        $change->Desc = $request->input('desc');
        $imageName1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->move(public_path('productimages'), $imageName1);
        $imageName2 = $request->file('imageT1')->getClientOriginalName();
        $request->file('imageT1')->move(public_path('productimages'), $imageName2);
        $change->image1 = $imageName1;
        $change->imageT1 = $imageName2;
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Nursery.index');
    }


    public function destroy($id)
    {
        $sec =Nursery::find($id);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Nursery.index');
    }
}
