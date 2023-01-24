<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class googleController extends Controller
{
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){

        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id',$user->getId())->first();

        if($finduser){
            Auth::login($finduser);
            return redirect('/');
        }else{
            $newuser = User::create([
                'name' =>  $user->getName(),
                'email' => $user->getEmail(),
                'is_admin' => false,
                'google_id' => $user->getId(),
                'password' => Hash::make('12345678'),
                'confirm_password' => Hash::make('12345678')
            ]);

            Auth::login($newuser);
            return redirect('/');

        }

    }
}
