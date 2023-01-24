@extends('template')

@section('title', 'Publisher Detail')

@section('content')
<div class="container">
    <h1 class="d-flex justify-content-center align-items-center h2 mb-4 mt-3 ms-5" style="color: #597c9c ">Brand Detail</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card">
            <img src="{{asset(trim($data->image))}}" alt="..." style="height:400px" width="400px">
            <div class="card-body">
                <h5>{{$data->name}}</h5>
                <h5>Address - {{$data->address}}</h5>
                <h5>Phone - {{$data->phone}}</h5>
                <h5>Email - {{$data->email}}</h5>
            </div>
        </div>
    </div>


    <h1 class="h2 mb-4 mt-5 ms-5" style="color: #597c9c ">Book List: </h1>
    <div class="row row-cols-5">
        @foreach ($bookData as $Bdata)
        <div class="card mb-2 mt-2 ms-5">
            <a href="/bookDetail/{{$Bdata->id}}" style="text-decoration:none; color: black" >
                <img src="{{ asset('storage/imagesB/' . $Bdata->image) }}" alt="..." style="height:300px" width="100%">
                <div class="card-body">
                    <h5 class="card-title">{{$Bdata->title}}</h5>
                    <h6 class="card-text">{{$Bdata->author}}</h6>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <br>

</div>

@endsection
