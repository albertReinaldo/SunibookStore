<?php

namespace App\Http\Controllers;

use App\Models\book_category;
use App\Models\books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PDO;

class BooksController extends Controller
{
    public function index()
    {
        $book_data = books::all();
        return view('showBook', compact('book_data'));
    }
    public function top5()
    {
        $book_data = books::limit(4)->get();
        return view('main', compact('book_data'));
    }

    public function indexCustomer()
    {
        $book_data = books::all();
        return view('homeAdmin', compact('book_data'));
    }

    public function search(Request $request)
    {
        $searchBook = $request->search;
        $book_data = books::where('title', 'like', "%$request->searchBook%")->get();
        return view('showBook', compact('book_data'));
    }

    public function detailBook($id)
    {
        $data = books::where('id', '=', $id)->first();
        return view('bookDetail', compact('data'));
    }

    public function viewupdate($id)
    {
        $data = books::where('id', '=', $id)->first();
        return view('updateBooksAdmin', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->price);
        $data = $request->validate([
            'title' => 'required|max:20',
            'author' => 'required|max:50',
            'year' => 'required|integer',
            'synopsis' => 'required|max:200',
            'price' => 'required|numeric|min:1000',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            //$data['image'] = $request->file('image')->store('imageB');
            $files = $request->file('image');
            $fullFileName = $files->getClientOriginalName();
            $fileName = pathinfo($fullFileName)['filename'];
            $extension = $files->getClientOriginalExtension();
            $objFile = $fileName . "-" . rand() . "." . $extension;
            $files->storeAs('imagesB/', $objFile);
            //Storage::delete($request->old_image);

            books::where('id','=',$id)->update([
                "title" => $request->title,
                "author" => $request->author,
                "year" => $request->year,
                "synopsis" => $request->synopsis,
                "price" => $request->price,
                "image" => $objFile
            ]);
        }
        //books::where('id', '=', $id)->update($data);
        else{
            books::where('id','=',$id)->update([
                "title" => $request->title,
                "author" => $request->author,
                "year" => $request->year,
                "synopsis" => $request->synopsis,
                "price" => $request->price,
            ]);
        }

        return redirect('/view');
    }

    public function insertForm()
    {
        return view('addBook');
    }

    public function insertBook(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:20',
            'author' => 'required|max:50',
            'year' => 'required|integer',
            'synopsis' => 'required|max:200',
            'price' => 'required|numeric|min:1000',
            'image' => 'required|image|file',
            'publishers_id' => 'required'
        ]);

        $files = $request->file('image');
        $fullFileName = $files->getClientOriginalName();
        $fileName = pathinfo($fullFileName)['filename'];
        $extension = $files->getClientOriginalExtension();
        $objFile = $fileName . "-" . rand() . "." . $extension;
        $files->storeAs('imagesB/', $objFile);

        $createdBook = books::create([
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year,
            "synopsis" => $request->synopsis,
            "price" => $request->price,
            "image" => $objFile,
            "publishers_id" => $request->publishers_id
        ]);

        DB::table('book_categories')->insert([
            'category_id' => $request->category_id,
            'book_id' => $createdBook->id
        ]);

        // $bookData = books::where('id','=',$id)->get();

        // foreach($bookData as $data){
        //     DB::table('book_categories')->insert([
        //         "book_id" => $data->id,
        //         "category_id" => $request->category_id
        //     ]);
        // }
        return redirect('/view');
    }

    public function delete($id)
    {
        $book = books::where('id', '=', $id)->get();
        // dd($book[0]->image);
        if (Storage::exists('public/imagesB/' . $book[0]->image)) {
            Storage::delete('public/imagesB/' . $book[0]->image);
        }
        $book[0]->delete();

        return redirect('/view');
    }
}
