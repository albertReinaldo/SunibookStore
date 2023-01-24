@extends('template')

@section('title', 'Category')

@section('content')

    <div class="row justify-content-center mb-4 mt-4">
        <form action="/searchBook" method="POST" class="d-flex" role="search" style="width:970px">
            @csrf
            <input name="searchBook" class="form-control me-2" type="search" placeholder="Search Book Title..."
                aria-label="Search">
            <button class="btn btn-outline-success text-dark" type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <div class="h2 mb-4 mt-4 ms-5" style="color: #597c9c">
            <h3>{{ $categories->name }}</h3>
        </div>
        <div class="row row-cols-5 mb-3">
            @foreach ($book as $books)
                <div class="card mb-2 mt-2 ms-5">
                    <a href="/bookDetail/{{ $books->bookCat->id }}"style="color: #676767;text-decoration: none">
                        <img src="{{ asset('storage/imagesB/' . $books->bookCat->image) }}" alt="..."
                            style="height:300px" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">{{ $books->bookCat->title }}</h5>
                            <h6 class="card-text">{{ $books->bookCat->author }}</h6>
                            <h6 class="card-text">Rp {{ $books->bookCat->price }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
