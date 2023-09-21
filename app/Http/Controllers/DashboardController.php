<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function dashboard(){
        $redirect = "";
        if(!empty(Auth::check()) && Auth::user()->user_type === "1"){
           $redirect = "admin.dashboard";
           
        } else if(!empty(Auth::check()) && Auth::user()->user_type === "2"){
          $redirect = "teacher.dashboard";
        } else if(!empty(Auth::check()) && Auth::user()->user_type === "3"){
          $redirect = "student.dashboard";
        } else if(!empty(Auth::check()) && Auth::user()->user_type === "4"){
          $redirect = "parent.dashboard";
        }else{
          return redirect()->back();
        //   return redirect()->route('user.logout');
        }
        return view('admin.dashboard');
    }
}
