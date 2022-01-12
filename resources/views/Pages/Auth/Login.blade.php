@extends('Layouts.main')
@section('content')
    <div class="form-signin">
        <form method="POST" action="/auth/local/login">
            @csrf
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required
                    value="{{ old('password') }}">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="checkbox mb-3 mt-3">
                <span class="fw-light">Don't have an account yet? <a href="/register">Register Here!</a></span>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
            <p class="mt-0 mb-0 text-muted text-center">OR</p>
            <a class="w-100 btn btn-lg btn-primary" href="/auth/google/redirect">Login with Google</a>
        </form>
    </div>
@endsection
