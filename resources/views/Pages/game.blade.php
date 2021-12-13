@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-3 text-center">
        {{-- <img class="d-block mx-auto" src="{{ URL::asset('vectors/vec-1.png') }}" alt="" width="82"> --}}
        <h1 class="display-5 fw-bold">Pixel Sus Rush!</h1>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-2 align-items-center">
            <img class="d-block mx-3" src="{{ URL::asset('vectors/knight-2.png') }}" alt="" width="100">
            <img class="d-block mx-5" src="{{ URL::asset('vectors/swords.png') }}" alt="" height="40">
            <img class="d-block mx-3" src="{{ URL::asset('vectors/sus-l.png') }}" alt="" width="100">
        </div>
        <div class="col-lg-6 mx-auto">
            @if ($prev)
                <p style="color:red;">Previous Round: {{$prev}}</p>
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
                            <button class="btn btn-success" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
