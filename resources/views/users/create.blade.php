@extends('layouts.users')

@section('content')

<h1>users Create</h1>
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

<form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="number" name="ID" class="form-control mb-3" placeholder="User ID"/>

    <input type="text" name="name" class="form-control mb-3" placeholder="User Name"/>

    <input type="text" name="email" class="form-control mb-3" placeholder="Email"/>

    <input list="role" name="role" class="form-control mb-3" placeholder="role">
    <datalist id="role">
        <option value="user"> </option>
        <option value="admin"> </option>
    </datalist>

    <input type="text" name="password" class="form-control mb-3" placeholder="password"/>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
