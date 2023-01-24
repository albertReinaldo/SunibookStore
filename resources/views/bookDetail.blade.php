@extends('template')

@section('title', 'Book Detail')

@section('content')
<div class="row ms-4 mb-3 mt-3">
    <div class="col-4">
        <img src="{{ asset('storage/imagesB/' . $data->image) }}" alt="..." style="height:400px" width="300px">
    </div>
    <div class="col-6">
        <h3 class="mb-5" style="color: #676767">{{ $data->title }}</h3>
        <h5 class="mb-3" style="color: #676767">Author: </h5>
        <p>{{ $data->author}}</p>
        <hr class="hr" style="width: 800px"/>
        <h5 class="mb-3" style="color: #676767">Brand: </h5>
        <p>{{ $data->publishers->name}}</p>
        <hr class="hr" style="width: 800px"/>
        <h5 class="mb-3" style="color: #676767">Year: </h5>
        <p>{{ $data->year}}</p>
        <hr class="hr" style="width: 800px"/>
        <h5 style="color: #676767">Synopsis: </h5>
        <p>{{$data->synopsis}}</p>
        <hr class="hr" style="width: 800px"/>
        <h5 style="color: #676767">Price: </h5>
        <p>{{ $data->price }}</p>
        <hr class="hr" style="width: 800px"/>
        @auth
            @if (Auth::user()->is_admin == 0)
            <form action="/cart/{{Auth::user()->id}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="details3">
                <h6 class="QTY">Qty</h6>
                <input type="number" name="qty" value="1" style="width: 60px">
                </div>
                <br>
                <button type="submit" class="btn btn-lg text-light" style="width: 150px;background-color: #7fa7a6;">Purchase</button>
                </form>
                @elseif (Auth::user()->is_admin == 1)

                @endif
        @endauth

        <br>
    </div>
</div>

@endsection
