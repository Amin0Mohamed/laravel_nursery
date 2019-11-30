<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionRecontroller extends Controller
{
    public function SectionViewReg(){
        return view('frontend.section');
    }

    public function SectionR(Request $request){
        $Name =$request->input('Name');
        $Desc =$request->input('Desc');
        $Available =$request->input('Available');

        if($request->isMethod('post')) {
            if ( empty($Name) || empty($Desc) || empty($Available)){
                return redirect('/SectionViewReg')->with('error','NOT DATA ENTERED !!!');
            }else{
                $registerda = $request->all();
                $sect = Section::create($registerda);
                return redirect('/services')->with('success','DATA SAFE DONE');
            }
        }
    }

    public function SectionDelete($id){
        $sec =Section::find($id);
        $sec->delete();
        return back();
    }
}
