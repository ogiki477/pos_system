<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        if(Auth::check()){
        if(Auth::user()->is_role == "1"){
            $data['meta_title'] = 'admin_dashboard';
            return view('admin.dashboard.dashboard',$data);
        }elseif(Auth::user()->is_role == "2"){
            $data['meta_title'] = 'user_dashboard';
            return view('user.dashboard.dashboard',$data);
        }
    }else{
        Auth::logout();
        return redirect('/');
    }
    }
}
