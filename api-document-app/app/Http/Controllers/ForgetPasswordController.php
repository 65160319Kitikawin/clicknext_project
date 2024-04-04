<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    //
    public function ForgetPassword(){
        return view('auth.forgot-password');

    }

    function ForgetPasswordPost(Request $request){
        $request->validate([
            'email' => "required|email|exists:users",
        ]);
        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()

        ]);

        Mail::send("emails.email-forgot-password",['token' => $token], function($messege) use ($request){
            $messege->to($request->email);
            $messege->subject("Reset Password");
        });

        return redirect()->route('login')->with('success','Reset password link has been sent to your email.');


    }

    function ResetPassword($token){
        return view("new-password",compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|confirmed",
            "password_confirmation" => "required"
        ]);
        $updatePassword =DB::table('password_reset_tokens')
        ->where([
            "email" => $request->email,
            "token" =>  $request->token,

        ])->first();
        if(!$updatePassword){
            return redirect()->route('reset.password')->with('error','Invalid');
    
    }

    User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);
    DB::table('password_reset_tokens')->where(["email"=>$request->email])->delete();
    return redirect()->route('login')->with('success','Password reset succesfully');


 
    
  }    

}