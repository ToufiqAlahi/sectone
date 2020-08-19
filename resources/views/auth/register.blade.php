@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="register_form">
            <div class="personal_info">
                <div class="heading">
                    <h1>User Registration</h1>
                </div>
                <div class="body">
                    <div class="full_name">
                        <label for="">Full Name : </label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="email">
                        <label for="">Email : </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="image">
                        <label for="">Picture: </label>
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="password">
                        <label for="">Password: </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="password">
                        <label for="">Confirm Password: </label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div><button type="submit">Submit</button></div>
            </div>
        </div>
    </form>
 
@endsection