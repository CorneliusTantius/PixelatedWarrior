@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-5 text-center align-items-center">
        <img class="d-block mx-auto" src="{{ URL::asset('vectors/knight.png') }}" alt="" width="82">
        <h1 class="display-5 fw-bold">Pixelated Warrior: FAQs</h1>
        <p class="text-center mb-5">
            Find the answers for the most frequently asked questions below
        </p>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <h6 class="mb-3 text-primary">What is Pixelated Warrior?</h6>
                <p>
                    Pixelated Warrior is a game of quizes where you explore the world, grind points by solving the quiz
                </p>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <h6 class="mb-3 text-primary">How to play Pixelated Warrior?</h6>
                <p>
                    Basically, you only have to register (if you dont have an account yet) and login. Once you are logged
                    in, you can pla our game right away.
                </p>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <h6 class="mb-3 text-primary">What is the base of the quiz?</h6>
                <p>
                    The quizes itself is based on Open Trivia DB's public API with mostly programming category taken.
                </p>
            </div>
        </div>
    </div>
@endsection
