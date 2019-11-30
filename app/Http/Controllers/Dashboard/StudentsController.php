<?php

namespace App\Http\Controllers\Dashboard;


use App\Nursery;
use App\Register;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Register::paginate(4);
        return view('dashboard.Students.index',compact('students'));
    }

    public function create()
    {
        return view('dashboard.Students.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'sName'=>'required',
                'sAge'=>'required',
                'sNationality'=>'required',
                'fName'=>'required',
                'fWork'=>'required',
                'fMobile'=>'required',
                'mName'=>'required',
                'mWork'=>'required',
                'mMobile'=>'required',
                'nName'=>'required',
                'nMobile'=>'required',
                'address'=>'required',
                'status'=>'required',
                'rDate'=>'required',
            ]
        );
        $change = new Register($request->all());
        $change->sName = $request->input('sName');
        $change->sAge = $request->input('sAge');
        $change->sNationality	 = $request->input('sNationality');
        $change->fName = $request->input('fName');
        $change->fWork = $request->input('fWork');
        $change->fMobile = $request->input('fMobile');
        $change->mName = $request->input('mName');
        $change->mWork = $request->input('mWork');
        $change->mMobile = $request->input('mMobile');
        $change->nName = $request->input('nName');
        $change->nMobile = $request->input('nMobile');
        $change->Address = $request->input('address');
        $change->Status = $request->input('status');
        $change->rDate = $request->input('rDate');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.Students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $last_user = User::all()->last();
        $change = Register::find(intval($id));
        return view('dashboard.Students.edit',compact('last_user','change'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'sName'=>'required',
                'sAge'=>'required',
                'sNationality'=>'required',
                'fName'=>'required',
                'fWork'=>'required',
                'fMobile'=>'required',
                'mName'=>'required',
                'mWork'=>'required',
                'mMobile'=>'required',
                'nName'=>'required',
                'nMobile'=>'required',
                'address'=>'required',
                'status'=>'required',
                'rDate'=>'required',
            ]
        );
        $change = Register::find($id);
        $change->sName = $request->input('sName');
        $change->sAge = $request->input('sAge');
        $change->sNationality	 = $request->input('sNationality');
        $change->fName = $request->input('fName');
        $change->fWork = $request->input('fWork');
        $change->fMobile = $request->input('fMobile');
        $change->mName = $request->input('mName');
        $change->mWork = $request->input('mWork');
        $change->mMobile = $request->input('mMobile');
        $change->nName = $request->input('nName');
        $change->nMobile = $request->input('nMobile');
        $change->Address = $request->input('address');
        $change->Status = $request->input('status');
        $change->rDate = $request->input('rDate');
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.Students.index');
    }


    public function destroy($id)
    {
        $sec =Register::find($id);
        $sec->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.Students.index');
    }
}
