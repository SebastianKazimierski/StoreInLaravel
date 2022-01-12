@extends('layouts.users')

@section('content')
<h1>Users CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('users.create') }}">Create user</a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">user ID</th>
            <th scope="col">user Name</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user) {{-- Loop users --}}
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role}}</td>
            <td>{{ $user->password}}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('users.show', $user->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
