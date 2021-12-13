@extends('Layouts.main')
@section('content')
<div class="px-4 py-5 my-3 text-center">
    <img class="d-block mx-auto" src="{{ URL::asset('vectors/knight.png') }}" alt="" width="82">
    <h1 class="display-5 fw-bold">Pixelated Warrior</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Explore the large world of randomized Pixel Knights that is filled with mysteries and quizes!</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2">
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/dashboard">Dashboard</a>
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/game">Play Now!</a>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2">
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/">Inventory</a>
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/">Marketplace</a>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2">
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/">PvP Match</a>
            <a type="button" class="btn btn-primary btn-lg px-4 gap-3 w-50" href="/">Leaderboard</a>
        </div>
    </div>
</div>
@endsection