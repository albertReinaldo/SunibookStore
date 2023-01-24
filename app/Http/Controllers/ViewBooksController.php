<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class ViewBooksController extends Controller
{
    //
    public function index(){
        $item = books::all();
        return view('viewBooksAdmin',compact('item'));
    }

}
