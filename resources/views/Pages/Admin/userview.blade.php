@extends('Layouts.main')
@section('content')
    <div class="px-4 py-5 my-3 text-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card px-3 py-3">
                <div class="user text-center">
                    <div class="profile mb-3"> <img src="{{ Storage::url($user->image) }}"" class="      rounded-circle"
                            width="200"> </div>
                </div>
                <div class="mt-5 text-center">
                    <h4 class="mb-0">{{ $user->name }}</h4>
                    <span class="text-muted d-block mb-2">{{ $user->email }}</span>
                    <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                        <div class="stats">
                            <h6 class="mb-0 mx-3">Max Score Count</h6> <span>{{ $user->max }}</span>
                        </div>
                        <div class="stats">
                            <h6 class="mb-0 mx-3">Min Score Count</h6> <span>{{ $user->min }}</span>
                        </div>
                    </div>
                    <div class="card stats my-2">
                        <h4 class="mb-0">Credits</h4> <span>{{ $user->credits }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
