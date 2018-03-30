<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function RegisterUser(Request $request){

        $this->validate($request,[
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        $table=new User();

        $table->firstname=$request->input('firstname');
        $table->lastname=$request->input('lastname');
        $table->email=$request->input('email');
        $table->password=bcrypt($request->input('password'));
        
        $table->save();
        return redirect()->back()->with('message','registered sucessfully');
    
    }
    public function LoginUser(Request $request){
        $data =$request->only('email','password');

        if(Auth::attempt($data)){
           return  redirect()->route('home');
        }
        return redirect()->back()->with('message','login fail');
        
    }
    public function getHome(){
        return view('home');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/')->with('message','logout');
    }
}
