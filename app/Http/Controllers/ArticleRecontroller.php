<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleRecontroller extends Controller
{
    public function ArticleReg(Request $request)
    {
        $title =$request->input('title');
        $content =$request->input('content');
        $image =$request->file('image');

        if ($request->isMethod('post')) {
                if ( empty($title) || empty($content) || empty($image) ){
                    return redirect('/blogs')->with('error','NOT DATA ENTERED !!!');
                }else{
                    $registerda = $request->all();
                    $imageName = $request->file('image')->getClientOriginalName();
                    $request->file('image')->move(public_path('productimages'), $imageName);
                    $registerda['image'] = $imageName;
                    $art = Articles::create($registerda);
                    return redirect('/blogs')->with('success','DATA SAFE DONE');
                }
            }
    }
    public function ArticleDelete($id){
        $ar =Articles::find($id);
        $ar->delete();
        return back();
    }
}
