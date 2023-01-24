<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function edit($id){

        $data = User::where('id', '=', $id)->first();
        // dd($data);
        return view('profile', compact('data'));
    }

    public function updateProfile(Request $request){

        $data = $request->validate([
            'name'=>'required|unique:users,name',
            'email'=>'required|email|unique:users,email'
        ]);


        User::where('id', $request->id)->update($data);
        return redirect('/');
    }

    public function changepass($id){
        $data = User::where('id', '=', $id)->first();
        return view('changePassword', compact('data'));
    }

    public function updatePassword(Request $request)
{
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'min:6|alpha_num|required_with:confirmed_new_password|same:confirmed_new_password',
            'confirmed_new_password' => 'required'
        ]);

        // User::where('id', $request->id)->update($data);
        // return redirect('/');

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect('/');
        // return back()->with("status", "Password changed successfully!");
}
}
