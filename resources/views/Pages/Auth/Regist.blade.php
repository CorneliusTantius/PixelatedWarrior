@extends('Layouts.main')
@section('content')
<div class="form-signin">
    <form>
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Register</h1>
    
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" placeholder="Jane Doe">
            <label for="floatingName">Full Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingEmail" placeholder="jdoe@example.com">
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3 mt-3">
            {{-- <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label> --}}
            <span class="fw-light">Already have an account? <a href="/login">Login Here!</a></span>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
        <p class="mt-0 mb-0 text-muted text-center">OR</p>
        <a class="w-100 btn btn-lg btn-primary" href="/auth/google/redirect">Register with Google</a>
    </form>
</div>
@endsection