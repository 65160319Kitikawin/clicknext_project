<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('auth/signup');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if($password === $confirm_password){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->route('login')->with('success','Register succesfully.');
        }
        else{
            return redirect()->route('register')->with('error','The password does no match.');
        }
    }


    public function login(){
        return view('auth/signin');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($credentials)) {
            return redirect('home');
        }

        return redirect()->route('login')->with('error','Email or password invalid.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

   
}
