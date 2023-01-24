@extends('template')

@section('title', 'home')

@section('content')
<div class="row justify-content-center mb-4">
    <form action="/searchBook" method="POST" class="d-flex" role="search" style="width:970px">
        @csrf
        <input name="searchBook" class="form-control me-2" type="search" placeholder="Search Book..." aria-label="Search">
        <button class="btn btn-outline-success text-dark" type="submit">Search</button>
      </form>
  </div>
<div class="container">
    <h3 class="p-3 mb-2 text-white" style="background-color: #7fa7a6">Book List</h3>

    <div class="row row-cols-3 mb-3">
        @foreach ($book_data as $data)
        <div class="card">
            <a href="/bookDetail/{{$data->id}}" style="text-decoration:none" style="text-decoration-color: black">
            <img src="{{$data->image}}" class="card-img-top" alt="..." style="height: 500px">
            <div class="card-body">
              <h5 class="card-title" style="color: #676767">{{$data->title}}</h5>
              <p class="card-text text-secondary" style="color: #676767">by</p>
              <h6 class="card-text text-secondary" style="color: #676767">{{$data->author}}</h6>
              <h6 class="card-text text-secondary" style="color: #676767">Price : {{$data->price}}</h6>
              <div class="btn btn-lg mt-4 text-light" style="width: 180px; background-color: #7fa7a6">
                Add To Cart
              </div>
              </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
