<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index(){
        //select from publishers
        $publisher_data = publishers::all();
        return view('publisher',compact('publisher_data'));
    }

    public function detailPublisher($id){
        $data = publishers::where('id' , '=', $id)->first();
        $bookData = books::where('publishers_id', '=', $id)->get();
        return view('publisherDetail',compact('data','bookData'));
    }

}
