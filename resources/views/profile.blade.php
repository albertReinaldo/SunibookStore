
@section('title','Profile')
@extends('template')

@Section ('content')
    <div class="d-flex justify-content-center align-items-center" style="height:600px; background-color: white">

        <form action="/profile" method="POST" class="d-flex flex-column align-items-start">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <h1 class="h3 mb-4" style="color: #597c9c ">Edit Profile</h1>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" value="{{old('name', Auth::user()->name)}}" placeholder="Name" name="name" style="width: 700px">
                <label for="floatingInput">New Name</label>
                @error('name')
                <div class="alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" value="{{old('email', Auth::user()->email)}}" placeholder="name@example.com" name="email" style="width: 700px">
                <label for="floatingInput">New Email</label>
                @error('email')
                <div class="alert-danger text-danger">{{ $message }}</div>
                 @enderror
            </div>

            <button class="btn btn-lg mt-4" type="submit" style="width: 180px; background-color: #febf0b">Save</button>

        </form>
    </div>

@endsection
