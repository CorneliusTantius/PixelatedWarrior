@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-3 text-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card px-3 py-3">
                <div class="user text-center">
                    <div class="profile mb-3"> <img src="{{ Storage::url(Auth::user()->image) }}"" class=" rounded-circle"
                            width="200"> </div>

                    <form action="/dashboard/update/image" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control form-control-sm" type="file" id="image" name="image">
                        <button class="btn btn-secondary btn-sm follow mt-3">Change</button>
                    </form>
                </div>
                <div class="mt-5 text-center">
                    <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                    <span class="text-muted d-block mb-2">{{ Auth::user()->email }}</span>
                    <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                        <div class="stats">
                            <h6 class="mb-0 mx-3">Max Score Count</h6> <span>{{ Auth::user()->max }}</span>
                        </div>
                        <div class="stats">
                            <h6 class="mb-0 mx-3">Min Score Count</h6> <span>{{ Auth::user()->min }}</span>
                        </div>
                    </div>
                    <div class="card stats my-2">
                        <h4 class="mb-0">Credits</h4> <span>{{ Auth::user()->credits }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
