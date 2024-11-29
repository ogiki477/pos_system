<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        if(Auth::check()){
        if(Auth::user()->is_role == "1"){
            dd("AdminDashboard");
        }elseif(Auth::user()->is_role == "2"){
            dd("UserDashboard");
        }
    }else{
        Auth::logout();
        return redirect('/');
    }
    }
}
