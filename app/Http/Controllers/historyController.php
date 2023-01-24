<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\history;
use App\Models\historyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class historyController extends Controller
{
    public function index($id){
        $histories = history::where('user_id','=',$id)->get();
        $joinHistory = history::where('user_id','=',$id)->join('history_details','history_details.history_id','=','histories.id')->join('books','books.id','=','history_details.book_id')->get();

        return view('history',compact('histories','joinHistory'));
    }

    public function insertHistory($user_id, Request $request){

        history::insert([
            'user_id' => $user_id,
            'TransactionDate' => Carbon::now()->toDateString()
        ]);

        $historyData = history::where('user_id','=',$user_id)->get();
        $historyDetail = Carts::where('user_id','=',$user_id)->get();
        $orderDate = history::orderBy('id','desc')->first();
        $joinHistory = history::where('user_id','=',$user_id)->join('history_details','history_details.history_id','=','histories.id')->join('books','books.id','=','history_details.book_id')->get();

        foreach($historyDetail as $detail){

            historyDetail::insert([
                'book_id' => $detail->book_id,
                'history_id' => $orderDate->id,
                'Quantity' => $detail->quantity
            ]);
        }
        Carts::where('user_id','=',$user_id)->delete();

        return redirect()->to('/transactionHistory/'.$user_id)->with(compact('joinHistory','historyData'));
    }
}
