@extends('Layouts.main')
@section('content')
    <div class="px-5 py-3 my-3 text-center">
        <img class="d-block mx-auto" src="{{ URL::asset('vectors/knight.png') }}" alt="" width="82">
        <h1 class="display-5 fw-bold">Pixelated Warrior: User Management</h1>
        <div class="col-lg-6 mx-auto">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Details</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a href="/admin/user/details/{{ $user->id }}" class="btn btn-success">Details</a>
                            </td>
                            <td>
                                <a href="/admin/user/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
