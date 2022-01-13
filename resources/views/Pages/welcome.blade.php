@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-3 text-center">
        <img class="d-block mx-auto" src="{{ URL::asset('vectors/knight.png') }}" alt="" width="82">
        <h1 class="display-5 fw-bold">Pixelated Warrior</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Explore the large world of randomized Pixel Knights that is filled with mysteries and
                quizes!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a type="button" class="btn btn-primary btn-lg px-4 gap-3" href="/login">Login</a>
                <a type="button" class="btn btn-outline-secondary btn-lg px-4" href="/register">Register</a>
            </div>
        </div>
    </div>
@endsection
