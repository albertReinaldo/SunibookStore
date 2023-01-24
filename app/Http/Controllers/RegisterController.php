<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registerLogic(Request $request){
        $request->validate([
            "name" =>"required",
            "email" =>"required|email",
            "password"=>"required|min:6",
            "confirm_password"=>"required|same:password",
        ]);

        DB::table('users')->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "confirm_password" =>Hash::make($request->confirm_password),
            "is_admin" => false,
            'google_id' => null,
        ]);

        return redirect('/login');
    }
}
