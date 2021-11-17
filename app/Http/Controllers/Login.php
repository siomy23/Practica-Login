<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function login(){
        return view('login');
}
function valida(Request $request){
        $user = $request->input('inuser');
        $pass = $request->input('inpass');
        return view('valida');
    }
}