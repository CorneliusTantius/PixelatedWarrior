@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto" src="{{ URL::asset('vectors/knight.png') }}" alt="" width="82">
        <h1 class="display-5 fw-bold">Pixelated Warrior: About</h1>
        <p class="lead mx-5 px-5">This web based trivia game is created by <u>Cornelius Tantius (2301859650)</u> for <b>Web
                Programming Final Project</b> purpose.</p>
        <p class="lead">
            <a href="https://github.com/CorneliusTantius" target="_blank"
                class="btn btn-lg btn-secondary fw-bold border-white">View More
                Projects On Github</a>
        </p>
    </div>
@endsection
