<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login(Request $request){

        $data['meta_title'] = 'login';
        return view('auth.login',$data);
    }

    public function login_insert(Request $request){
        //dd("Yooo");
        //dd($request->all());
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],true)){

            if(Auth::user()->is_role == "1"){
                return redirect()->intended('admin/dashboard');
            }elseif(Auth::user()->is_role == "2"){
                return redirect()->intended("user/dashboard");
            }

        }else{
            return redirect()->back()->with('error',"Invalid Credentials");
        }
    }

    public function register(Request $request){
        $data['meta_title'] = 'registration';
        return view('auth.register',$data);
    }

    public function register_insert(Request $request){
       // dd("Yooo");

       $data = $request->validate([
            'password' => 'required|min:4',
            'email' => 'required|unique:users'  
       ]);

       $data = new User();
       $data->name  = trim($request->name);
       $data->username = trim($request->username);
       $data->email = trim($request->email);
       $data->remember_token = Str::random(30);
       $data->password = Hash::make($request->password);

       $data->save();

       return redirect('/')->with('success',"The User has been created Successfully");
    }

    public function forgot(Request $request){
        $data['meta_title'] = 'forgot';
        return view('auth.forgot',$data);
    } 


    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
