<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datauser;

class PageController extends Controller
{
    function home(){
        return view("home");
    }

    function register(){
        return view('register');
    }

    function registersb(Request $req){
        $this->validate($req,
            [
                "name"=>"required|alpha",
                "email"=>"required|unique:users,email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8",
                "conf_password"=>"required|same:password"
            ],
        
            [
                "password.regex"=>"Password contain upper and lower case, number and special characters",
                "conf_password.same"=>"Confirm password and password must match"
            ]);

            $us = new datauser();
            $us->name = $req->name;
            $us->email =$req->email;
            $us->password =$req->password;
            
            $us->save();

            return view("home");
    }

    function login(){
        return view('login');
    }

    function loginsb(Request $req){
        $this->validate($req,
            [
                "email"=>"required|exists:users,email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8|exists:users,password",
            ],
        
            [
                "password.regex"=>"Password contain upper and lower case, number and special characters",
            ]);

            $users = datauser::all();

            $checkUsers = datauser::where('email','=',$req->email)->first();

            if($checkUsers->type == 'User'){
                return view('dashboard')->with('users',$users);
            }

            else{
                return view('list')->with('users',$users);
            }
    }

    public function dashboard(){
        $users = datauser::all();
        
        return view('dashboard')->with('users',$users);
    }

    public function details($id){
        $user = datauser::where('id','=',$id)->first(); 
        
        return view('details') -> with('user',$user);
    }
}
