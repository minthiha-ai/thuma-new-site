<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\MemberInfo;

class FrontController extends Controller
{
    public function index(){
        $c = Content::orderby('id','desc')->paginate(5);
        $members = MemberInfo::all();
        return view('frontend.index',compact('c'));
    }

    public function content(){

        $c = Content::orderby('id','desc')->get();
        return view('frontend.content',compact('c'));
    }

    public function content_detail($id){
        $c = Content::find($id);
        $co = Content::orderby('id','desc')->paginate(5);
        return view('frontend.content-detail',compact('c','co'));

    }
}

