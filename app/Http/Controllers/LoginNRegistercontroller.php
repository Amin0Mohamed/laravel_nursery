<?php

namespace App\Http\Controllers;

use App\Articles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginNRegistercontroller extends Controller
{
    public  function loginfun(Request $request){
        $Remm = $request->input('email');
        $Rpss = $request->input('password');
        if ($request->isMethod('post')) {
            $data = User::all();
            foreach ($data as $dataM) {
                $em = $dataM->email;
                $pas = $dataM->password;
                $id = $dataM->Uid;
                $name = $dataM->name;
                $c_password  =$dataM->c_password;
                if (($em == $Remm) && ($pas == $Rpss)) {
                    return redirect()->route('frontend.services',
                        [
                            'email'=>$request->session()->put('email',$em),
                            'password'=>$request->session()->put('password',$pas),
                            'Uid'=>$request->session()->put('Uid',$id),
                            'name'=>$request->session()->put('name',$name),
                            'c_password'=>$request->session()->put('c_password',$c_password)
                        ]);
                }
            }
        }
        return back();
    }
    public  function registerfun(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'c_password'=>'required|same:password'
        ]);
        if($request->isMethod('post')) {
            $dataform = $request->all();
            $da = User::create($dataform);
        }
        return back();
    }
    public function UpdatUser($id,Request $request)
    {
        $use = User::find(intval($id));
        $dat = $request->all();
        $use->name=$dat['name'] ;
        $use->email=$dat['email'] ;
        $use->password=$dat['newpass'];
        $use->c_password=$dat['confirmnewpass'];
        $use->save();
        $re = $request->session()->forget('Uid');
        return redirect('homepage');
    }
    public function Login_ReView(){
        return view('frontend.login');
    }
    public function service(){
        return view('frontend.services');
    }
    public function Homepage(){
        return view('frontend.index');
    }
    public function FeqQ(){
        return view('frontend.faq');
    }
    public function Contact(){
        return view('frontend.contact');
    }
    public function About(){
        return view('frontend.aboutus');
    }
    public function Staff(){
        return view('frontend.ourstaff');
    }
    public function Blog(){
        $articles = Articles::all();
        return view('frontend.blogs',compact('articles'));
    }


}
