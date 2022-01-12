@extends('layouts.users')

@section('content')
    <h1>users Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">ID</h5>
        <p class="fw-bold">{{ $user->id }}</p>

        <h5 class="text-warning">Name</h5>
        <p class="fw-bold">$ {{ $user->name }}</p>

        <h5 class="text-warning">Email</h5>
        <p class="fw-bold">{{ $user->email }}</p>
        <h5 class="text-warning">Role</h5>
        <p class="fw-bold">{{ $user->role }}</p>
        <h5 class="text-warning">Password</h5>
        <p class="fw-bold">{{ $user->password }}</p>

    </div>

@endsection
