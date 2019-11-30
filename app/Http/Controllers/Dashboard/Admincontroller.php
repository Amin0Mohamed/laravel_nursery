<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class Admincontroller extends Controller
{
    public function login(Request $request){
        $Remm = $request->get('email');
        $Rpss =  $request->get('password');
        if ($request->isMethod('post')) {
            $Rpasss = md5($Rpss);
            $dataM = Admin::where([
                ['email','=',$Remm],
                ['password','=',$Rpasss]
            ])->first();
            $name = $dataM->name;
            $image = $dataM->image;
            $Authorize = $dataM->Authorize;
            return redirect()->route('dashboard.index',
                [
                    'name'=>$request->session()->put('name',$name),
                    'image'=>$request->session()->put('image',$image),
                    'Authorize'=>$request->session()->put('Authorize',$Authorize)
                ]);
        }
        return back();
    }

//    public function login(Request $request){
//        $Remm = $request->get('email');
//        $Rpss =  $request->get('password');
//        if ($request->isMethod('post')) {
//            $data = Admin::all();
//            foreach ($data as $dataM) {
//                $id = $dataM->id;
//                $em = $dataM->email;
//                $pas = $dataM->password;
//                $name = $dataM->name;
//                $image = $dataM->image;
//                $Authorize = $dataM->Authorize;
//                if (($em == $Remm) && ($Rpss == $pas)) {
//                    return redirect()->route('dashboard.index',
//                        [
//                            'AID'=>$request->session()->put('AID',$id),
//                            'name'=>$request->session()->put('name',$name),
//                            'image'=>$request->session()->put('image',$image),
//                            'Authorize'=>$request->session()->put('Authorize',$Authorize)
//                        ]);
//                }
//            }
//        }
//        return redirect()->route('/ar/dashboard/registeradminview');
//    }




    public function register(Request $request){
        //$request->validate($request->all());
        $ad = new Admin();
        $data = $request->all();
        $data['password'] = md5($data['password']);
        $data['c_password'] = md5($data['c_password']);
        $admin =  Admin::create($data);
        return view('dashboard.Admin.login');
    }
    public function registerview(){
        return view('dashboard.Admin.register');
    }
    public function loginview(){
        return view('dashboard.Admin.login');
    }

    public function logoutpage(Request $request){
        $re = $request->session()->forget('AID');
        return view('dashboard.Admin.login');
    }
}
