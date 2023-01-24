@extends('template')
@section('title','History')
@section('content')

<div class="d-flex justify-content-center flex-column align-items-center">
    @if ($histories->isEmpty())
            <h1 class="d-flex flex-column justify-content-center align-items-center" style="height:500px;">Transaction History is empty! Let's go shopping</h1>
    @else
        <div class="container">
            <h1>Transaction History</h1>
            @foreach ($histories as $history)
            <div class="dropdown">
                <table class="table table-warning table-striped table-bordered">
                    <div class="d-none">{{$i = 0}}</div>
                    <thead>
                        <tr>
                            {{$history->TransactionDate}}
                        </tr>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        </tr>
                        @foreach ($joinHistory as $join)
                            @if ($join->history_id == $history->id)
                                <tr>
                                    <td><img src="{{asset('storage/imagesB/' .$join->image)}}" alt="" style="height:200px" width="150px"></td>
                                    <td>{{$join->title}}</td>
                                    <td>IDR.{{$join->price}}</td>
                                    <td>{{$join->Quantity}}</td>
                                    <td>IDR.{{$join->price * $join->Quantity}}</td>
                                </tr>
                                <div class="d-none">{{$i += $join->price * $join->Quantity}}</div>
                            @endif
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Total Price :</th>
                            <td>IDR.{{$i}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
