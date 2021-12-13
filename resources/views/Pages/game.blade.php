@extends('Layouts.main')
@section('content')
    <div class="px-5 py-3 my-2 text-center">
        {{-- <img class="d-block mx-auto" src="{{ URL::asset('vectors/vec-1.png') }}" alt="" width="82"> --}}
        <h1 class="display-5 fw-bold">Pixel Sus Rush!</h1>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2 align-items-center">
            <img class="d-block mx-3" src="{{ URL::asset('vectors/knight-2.png') }}" alt="" width="100">
            <img class="d-block mx-5" src="{{ URL::asset('vectors/swords.png') }}" alt="" height="40">
            <img class="d-block mx-3" src="{{ URL::asset('vectors/sus-l.png') }}" alt="" width="100">
        </div>
        <div class="col-lg-6 mx-auto">
            @if ($prev != null)
                @if ($prev == 1)
                    <p>Previous Round: Received <span style="color: green;">Maximum</span> Point</p>
                @endif
                @if ($prev == 0)
                    <p>Previous Round: Received <span style="color: red;">Minimum</span> Point</p>
                @endif
            @endif
            @if ($isQuiz == false)
                <p>Failed to load battle!</p>
            @else
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{$question}}</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{"/answer/send/".$correctAnswer}}">
                            @csrf
                            @for($i=0; $i<count($answers); $i++)
                                <div class="my-2">
                                    <input class="form-check-input" type="radio" name="opt" value={{$i}} id={{"opt".$i}}>
                                    <label class="form-check-label" for={{"opt".$i}}>
                                        {{$answers[$i]}}
                                    </label>
                                </div>
                            @endfor
                            <button class="btn btn-success my-1" style="width: 20%;" type="submit">Submit</button>
                        </form>
                        <a type="button" class="btn btn-secondary my-3" style="width: 20%;" href="/">Go Back</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
