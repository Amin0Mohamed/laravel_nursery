<?php

namespace App\Http\Controllers;

use App\Nursery;
use App\Register;
use App\User;
use Illuminate\Http\Request;

class NurseryRecontroller extends Controller
{
    public function NurseryRview(){
        return view('frontend.add-nursery');
    }

    public function NurseryR(Request $request){
        $Nur_name =$request->input('Nur_name');
        $Phone =$request->input('Phone');
        $o_nation =$request->input('o_nation');
        $Address =$request->input('Address');
        $image1 =$request->file('image1');
        $Desc =$request->input('Desc');

        if($request->isMethod('post')) {
                if ( empty($Nur_name) || empty($Phone) || empty($o_nation) || empty($Address) || empty($image1) || empty($Desc) ){
                    return redirect('/NurseryViewReg')->with('error','NOT DATA ENTERED !!!');
                }else{
                    $registerda = $request->all();
                    $imageName = $request->file('image1')->getClientOriginalName();
                    $request->file('image1')->move(public_path('productimages'), $imageName);
                    $registerda = $request->all();
                    $registerda['image1']=$imageName;

                    $nur = Nursery::create($registerda);
                    return redirect('/services')->with('success','DATA SAFE DONE');
                }
        }
    }

    public function NurseryDetete($id){
        $nur =Nursery::find($id);
        $nur->delete();
        return back();
    }
}
