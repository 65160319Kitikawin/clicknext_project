<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    //Create Index
    public function index() {
        return view('auth.forgot-password');
    }
}
