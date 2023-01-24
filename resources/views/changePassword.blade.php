@extends('template')

@Section ('content')
    <div class="d-flex justify-content-center align-items-center" style="height:600px; background-color: #f9f8f4">

        <form action="/changePassword" method="POST" class="d-flex flex-column align-items-start">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <h1 class="h3 mb-4" style="color: #597c9c ">Change Password</h1>
            <div class="form-floating mb-2">
                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="Old Password" name="password" style="width: 700px">
                <label for="oldPasswordInput" class="form-label">Old Password</label>
                @error('old_password')
                <div class="alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" placeholder="New Password" name="password" style="width: 700px">
                <label for="newPasswordInput" class="form-label">Password</label>
                @error('new_password')
                    <div class="alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input name="confirmed_new_password"type="password" class="form-control @error('confirmed_new_password') is-invalid @enderror" id="confirmNewPasswordInput" placeholder="Confirm New Password" name="password_confirmation" style="width: 700px">
                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                @error('confirmed_new_password')
                    <div class="alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-lg mt-4" type="submit" style="width: 180px; background-color: #febf0b">Save</button>

        </form>
    </div>
@endsection
