<?php

namespace App\Http\Controllers;

use App\Nursery;
use App\Register;
use App\User;
use Illuminate\Http\Request;

class StudentRecontroller extends Controller
{
    public function studentRview(){
        return view('frontend.register');
    }

    public function studentR(Request $request){
        //  ************************************************************
        $sName= $request->input('sName');
        $sAge=$request->input('sAge');
        $sNationality= $request->input('sNationality');
        $rDate= $request->input('rDate');
        $Address= $request->input('Address');
        $fName=  $request->input('fName');
        $mName=$request->input('mName');
        $fMobile = $request->input('fMobile');
        $mMobile=$request->input('mMobile');
        $fWork= $request->input('fWork');
        $mWork= $request->input('mWork');

        if($request->isMethod('post')) {
            if (empty($sName) || empty($sAge) || empty($sNationality) || empty($rDate) || empty($Address) || empty($fName)||  empty($mName) || empty($fMobile) || empty($mMobile) || empty($fWork) || empty($mWork)){
                return redirect('/StuViewReg')->with('error','NOT DATA ENTERED !!!');
            }else
                $registerda = $request->all();
                $data = Register::create($registerda);
            return redirect('/services')->with('success','DATA SAFE DONE');
            }
    }

    public function studentdelete($id){
        $sec =Register::find($id);
        $sec->delete();
        return back();
    }

}
