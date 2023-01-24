@extends('template')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center mb-3" style="height:900px;background-color: #f9f8f4">
    <h1 class="h3 mb-4 mt-3" style="color: #597c9c ">Update Item</h1>
    <form method="post" action="/updateitem/logic/{{$data->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="old_image" value="{{$data->image}}">
        <div class="form-group mb-2">
            <label>Books ID</label>
            <input type="text" class="form-control" placeholder="" required="" disabled value="{{$data->id}}">
        </div>
        <div class="form-group mb-2">
            <label>Price</label>
            <input type="number" name="price" class="form-control" placeholder="" required="" value="{{$data->price}}">
        </div>
        <div class="form-group mb-2">
            <label for="floatingInput">Title</label>
            <input type="text" name="title" class="form-control" placeholder="" required value="{{$data->title}}">
        </div>
        <div class="form-group mb-2">
            <label for="floatingInput">Author</label>
            <input type="text" name="author" class="form-control" placeholder="" required value="{{$data->author}}">
        </div>
        <div class="form-group mb-2">
            <label for="floatingInput">Year</label>
            <input type="text" name="year" class="form-control" placeholder="" required value="{{$data->year}}">
        </div>
        <div class="form-group mb-2">
            <label for="floatingInput">Synopsis</label>
            <input type="text" name="synopsis" class="form-control" placeholder="" required value="{{$data->synopsis}}" style="width: 600px; height: 80px;">
        </div>

        <div class="form-group mb-2">
            <label>New Image</label>
            <input type="file" class="form-control" name="image" placeholder="" value="{{$data->image}}">
        </div>
        <div class="form-group text-right mt-3">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>
@endsection
