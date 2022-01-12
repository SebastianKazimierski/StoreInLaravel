@extends('layouts.app')

@section('content')
<div>
    <table width = 100% border="1px">
        <th><a class="nav-link" href="/about">About Us</a></th>
        <th><a class="nav-link" href="/shop">Shop</a></th>
        <th><a class="nav-link" href="/cart">Cart</a></th>
        <th><a class="nav-link" href="/ContactUs">Contact Us</a></th>
    </table>
</div>
<br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Witaj! Życzmy udanych zakupów!
                </div>
            </div>
    </div>
</div>

@endsection
