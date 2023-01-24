<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\categories;


class CategoriesController extends Controller
{
    public function display($id)
    {
        $categories = categories::where('id', '=', $id)->first();
        $book = book_category::where('category_id', '=', $categories->id)->get();

        // dd($book);

        return view('category', compact('book', 'categories'));
    }
}
