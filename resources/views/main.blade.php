@extends('template')
@section('title', 'SunibookStore')
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
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/promo.jpg" class="d-block w-100" alt="..." style="width: 100px" height="500px">
                </div>
                <div class="carousel-item">
                    <img src="img/banner.webp" class="d-block w-100" alt="..." style="width: 100px" height="500px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>
        <br>

        <h1 class="h2 mb-4 mt-3 ms-5" style="color: #597c9c ">Recomendation Just For You</h1>
        <a href="/book" class="ms-5" style="font-weight: bold; text-decoration: none; color: #166c69">See All</a>
        <div class="row row-cols-5">
            @foreach ($book_data as $data)
                <div class="card mb-2 mt-2 ms-5">
                    <a href="/bookDetail/{{ $data->id }}" style="text-decoration:none; color: black">
                        <img src="{{ asset('storage/imagesB/' . $data->image) }}" class="card-img-top" alt="..."
                            style="height: 300px">
                        <div class="card-body">
                            <div
                                style="width: 400px;
                    text-overflow: ellipsis;
                    white-space:nowrap;
                    overflow:hidden;
                    color: #676767">
                                <h5>{{ $data->title }}</h5>
                            </div>
                            {{-- <h5 class="card-title" style="color: #676767">{{$data->title}}</h5> --}}
                            <h6 class="card-text" style="color: #676767">Rp {{ $data->price }}</h6>
                            {{-- <div class="btn btn-lg mt-4 text-light" style="width: 180px; background-color: #7fa7a6">
                            Detail
                    </div> --}}
                    </a>
                </div>
        </div>
        @endforeach
    </div>
    </div>
    </a>
    </ul>

    <br>
    <br>
    <br>
@endsection
