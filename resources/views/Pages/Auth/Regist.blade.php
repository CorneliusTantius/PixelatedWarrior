@extends('Layouts.main')
@section('content')
<div class="form-signin">
    <form method="POST" action="/auth/local/register">
        @csrf
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Register</h1>
    
        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingName" name="name" placeholder="Jane Doe" required value="{{ old('name') }}">
            <label for="floatingName">Full Name</label>
            @error('name')
                <div class="invalid-feedback error-message">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="number" class="form-control @error('age') is-invalid @enderror" id="floatingAge" name="age" placeholder="Your age" required value="{{ old('age') }}">
            <label for="floatingAge">Age</label>
            @error('age')
                <div class="invalid-feedback error-message">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="jdoe@example.com" required value="{{ old('email') }}">
            <label for="floatingEmail">Email address</label>
            @error('email')
                <div class="invalid-feedback error-message">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required value="{{ old('password') }}">
            <label for="floatingPassword">Password</label>
            @error('password')
                <div class="invalid-feedback error-message">
                    {{ $message }}
                </div>
            @enderror
        </div>
    
        <div class="checkbox mb-3 mt-3">
            <span class="fw-light">Already have an account? <a href="/login">Login Here!</a></span>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
        <p class="mt-0 mb-0 text-muted text-center">OR</p>
        <a class="w-100 btn btn-lg btn-primary" href="/auth/google/redirect">Register with Google</a>
    </form>
</div>
@endsection