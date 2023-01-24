@extends('template')

@section('title', 'Publisher')

@section('content')
    <div class="container">
        <h1 class="h2 mb-4 mt-3 ms-5" style="color: #597c9c ">Brand</h1>
        <div class="row row-cols-5">
            @foreach ($publisher_data as $data)
            <div class="card mb-4 mt-2 ms-4">
                <a href="/publisherDetail/{{$data->id}}" style="text-decoration:none; color: black" >
                <img src="{{$data->image}}" class="card-img-top" alt="..." style="height: 300px">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #676767">{{$data->name}}</h5>
                        <h6 class="card-text" style="color: #676767">{{$data->address}}</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection


