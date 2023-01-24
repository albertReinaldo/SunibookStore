@extends('template')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="background-color: #f9f8f4">
        <h1 class="h3 mb-4 mt-5" style="color: #597c9c ">Add Books</h1>
        <form method="post" action="/addBooks" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="floatingInput">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Insert Title">
            </div>
            <div class="form-group mb-2">
                <label for="floatingInput">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Insert Author">
            </div>
            <div class="form-group mb-2">
                <label for="floatingInput">Year</label>
                <input type="text" name="year" class="form-control" placeholder="Insert Year">
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Publishers</label>
                <select class="form-select" aria-label="Brand" name="publishers_id">
                    <option selected>Publisher Name</option>
                    <option value="1">Dutton Books</option>
                    <option value="2">Gagas Media</option>
                    <option value="3">Elex Media Komputindo</option>
                    <option value="4">Rak Buku</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Category</label>
                <select class="form-select" aria-label="Category" name="category_id">
                    <option selected>Category</option>
                    <option value="1">Romance</option>
                    <option value="2">Horror</option>
                    <option value="3">Fantasy</option>
                    <option value="4">Comedy</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Insert Price">
            </div>
            <div class="form-group mb-2">
                <label for="floatingInput">Synopsis</label>
                <input type="text" name="synopsis" class="form-control" placeholder="Insert Synopsis"
                    style="width: 600px; height: 80px;">
            </div>
            <div class="form-group mb-2">
                <label>New Image</label>
                <input type="file" class="form-control" name="image" placeholder="Insert Image">
            </div>
            <div class="form-group text-right mt-3 d-flex justify-content-left">
                <button type="submit" class="btn btn-warning">Insert</button>
            </div>
            <br>
        </form>
    </div>
@endsection
