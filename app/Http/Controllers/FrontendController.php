<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function loginsubmit(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=$request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role'=>'admin'])){
            Session::put('user',$data['email']);
            //request()->session()->flash('success','Successfully login');
            return redirect()->route('admin.home');
        }
        elseif(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role'=>'staff'])){
            Session::put('user',$data['email']);
            //request()->session()->flash('success','Successfully login');
            return redirect()->route('staff.home');
            }
        
        else{
            return redirect()->back();
            // request()->session()->flash('error','records do not match!!');
        }
    }

    public function logout(){
        session::forget('user');
        return redirect()->route('login.form');
    }

    public function register(){
        return view('backend.auth.register');
    }
}
