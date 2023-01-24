<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartsController extends Controller
{
    public function idx($id){
        $cart_data = Carts::where('user_id','=',$id)->get();

        return view('cart', compact('cart_data'));
    }

    public function store($user_id,$book_id, Request $request){

        Carts::insert([
            'book_id' => $book_id,
            'user_id' => $user_id,
            'quantity' => $request->qty

        ]);
        $cart_data = Carts::where('user_id','=',$user_id)->get();

        // return ('/cart/{id}',compact('cart_data'));
        // dd($cart_data);
        return redirect()->to('/cart/'.$user_id)->with(compact('cart_data'));
    }

    public function deleteLogic($user_id,$id){
        DB::table('carts')->where('book_id','=',$id)->delete();
        $cart_data = Carts::where('user_id','=',$user_id)->get();
       ;
        return view('cart',compact('cart_data'));
    }
}
