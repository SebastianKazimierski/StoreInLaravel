@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Panel Administratora</div>
                <div class="card-body">
                    Witaj w panelu administratora, wybierz co chcesz zrobić@auth
                    <th><a class="nav-link" href="/products">Edytować produkty</a></th>
                    <th><a class="nav-link" href="/orders">Edytować zamówienia</a></th>
                    <th><a class="nav-link" href="/users">Edytować użytkowników</a></th>
                    @endauth
                </div>
            </div>
    </div>
</div>
@endsection
