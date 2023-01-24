@extends('template')
@section('title','Cart')
@section('content')

@if ($cart_data->isEmpty())
    <h1 class="d-flex flex-column justify-content-center align-items-center" style="height:500px; background-color: #f9f8f4">Cart is empty! Let's go Shopping!!</h1>
@else
<div class="d-flex justify-content-center flex-column align-items-center">
    <div class="d-none"> {{$i = 0}}</div>
        @foreach ($cart_data as $data )
        {{-- {{dd($data)}}
        {{$data->quantity}} --}}
        <div class="d-flex mb-1 mt-5">
            <div>
                <img src="{{asset('storage/imagesB/' .$data->books->image)}}" alt="" style="height: 300px" width="300px">
            </div>

            <div class="ms-3">
                <div style="width: 500px;
                text-overflow: ellipsis;
                white-space:nowrap;
                overflow:hidden"><h4>{{$data->books->title}}</h2></div>
                <div><p>{{$data->books->title}}</p></div>
                <div> <p>Quantity : {{$data->quantity}}</p></div>
                <div> <p>Total Price : {{$data->books->price * $data->quantity}}</p> </div>
                <div class="d-none">{{$i += $data->books->price * $data->quantity}} </div>
            </div>

            <form action="/cart/delete/{{Auth::User()->id}}/{{$data->books->id}}" method="POST">
                @csrf
                @method('delete')
                <div class="ms-5">
                    <button type="submit" class="btn btn-outline-warning"><img src= "{{asset('ctrl/delete.png')}}" alt=""></button>
                 </div>
            </form>
        </div>

    @endforeach
    <h5>Total Price : IDR.{{$i}}</h5>
    <div class="ms-5 mb-4 mt-3">
        <form action="/history/{{Auth::user()->id}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning" >Checkout</button>
       </form>
       </div>
</div>
@endif


@endsection
