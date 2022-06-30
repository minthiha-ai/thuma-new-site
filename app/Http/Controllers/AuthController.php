<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        Auth::attempt(['email' => $request->email,'password' => $request->password]);
        if (Auth::check()){
            return redirect('admin/');
        }else{
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
