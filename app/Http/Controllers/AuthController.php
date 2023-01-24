<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

        // public function login(Request $request){
        //     $credentials = [
        //         'email' => $request->email,
        //         'password' => $request->password
        //     ];


        //     if (Auth::attempt($credentials) == true){
        //         Cookie::queue(
        //             'loggedUser',
        //             Auth::user()->email,
        //             60
        //         );

        //         Session::put('userSession',Auth::user()->name);

        //         return redirect('/customer');
        //     } else {
        //         return redirect()->back();
        //     }
        // }

        // public function logout(){
        //     Auth::logout();
        //     return redirect('/login');
        // }

}
