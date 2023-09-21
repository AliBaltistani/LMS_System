<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;
use Mail;
use Str;

class AuthController extends Controller
{
    public function authLogin(Request $request){
      
         if(Auth::attempt(["email"=>$request->email, "password"=>$request->password],  true)){
             
          $redirect = "";
              if(!empty(Auth::check()) && Auth::user()->user_type === "1"){
                $redirect = "admin.dashboard";
              } else if(!empty(Auth::check()) && Auth::user()->user_type === "2"){
                $redirect = "teacher.dashboard";
              } else if (!empty(Auth::check()) && Auth::user()->user_type === "3"){
                $redirect = "student.dashboard";
              } else if(!empty(Auth::check()) && Auth::user()->user_type === "4"){
                $redirect = "parent.dashboard";
              }else{
                $redirect = "login";
              }

              return redirect()->route($redirect);

        }else{
            return view('Registrations.login')->with(['error'=> "Username or password not match"]);
        }
    }

    public function checkEmail(Request $request){

       $user = User::getUserEmail($request->useremail);
       if($user){
           $user->remember_token = Str::random(10);
           $user->save();

           Mail::to($user->email)->send(new ForgotPassword($user));
        return redirect()->back()->with(['success'=> "please check your email and reset password"]);

       }else{
        return redirect()->back()->with(['error'=> "Email not found in our records"]);
       }
    }

    public function resetPassword($token){
      
        $remeber_token = User::where('remember_token', '=' , $token)->first();
         if($remeber_token){
           return view('Registrations.create-new-password');
         }else{
          abort(444);
         }  
    } 

    
    public function ChnagePassword($token,  Request $request){
      // dd($);
    }

    public function logout(){
      Auth::logout();
    return redirect()->route('login');
    }
}
