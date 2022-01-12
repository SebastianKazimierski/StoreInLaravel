@extends('layouts.users')


@section('content')

<h1>users Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post"”>
    @csrf
    @method('put')
    ID
    <input type="number" name="id" class="form-control mb-3" placeholder="User ID" value="{{ $user->id }}"/>
    Name
    <input type="text" name="name" class="form-control mb-3" placeholder="User Name" value="{{ $user->name }}"/>
    Email
    <input type="text" name="email" class="form-control mb-3" placeholder="Email" value="{{ $user->email }}"/>
    Role
    <input list="role" name="role" class="form-control mb-3" placeholder="role"  >
    <datalist id="role">
        <option value="user"> </option>
        <option value="admin"> </option>
    </datalist>

    <input type="hidden" name="password" class="form-control mb-3" placeholder="password"/>
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
