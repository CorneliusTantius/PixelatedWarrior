@extends('Layouts.main')
@section('content')
<div class="form-signin">
    <form>
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Login</h1>
    
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
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