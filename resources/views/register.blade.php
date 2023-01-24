@extends('template')

@section('title', 'Register')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f9f8f4">
<form action={{route('register-logic')}} method="post" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-4" style="color: #597c9c ">Register</h1>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Insert Name" name="name" style="width: 1200px">
        <label class="form-label">Name</label>
        @error('name')
            {{$message}}
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" name="email" style="width: 1200px">
        <label class="form-label">Email Address</label>
        @error('email')
            {{$message}}
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password" style="width: 1200px">
        <label class="form-label">Password</label>
        @error('password')
            {{$message}}
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingInput" placeholder="Confirm Password" name="confirm_password" style="width: 1200px">
        <label class="form-label">Confirm Password</label>
        @error('confirm_password')
            {{$message}}
        @enderror
    </div>
    <button type="submit" class="btn btn-primary" style="background-color: #7fa7a6">Register Now</button>
</form>
<br>
</div>

@endsection
