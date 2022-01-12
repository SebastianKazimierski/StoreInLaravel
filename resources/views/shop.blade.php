@extends('layouts.app')

@section('content')

 &nbsp;

    <h2>Products</h2>
    <div class="card p-5">
        <div class="row">
        @foreach ($allProducts as $product)
        <div class="col-3 ">
            <div class="card text-center rounded">
            <img class="card-img-top" src="{{asset('cart.png')}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <p class="card-text">{{$product->description}}</p>
                <h3>$ {{$product->price}}</h3>
            </div>
            <div class="card-body">
                <a href="{{route('cart.add', $product->id)}}" class="card-link">Add to cart</a>
            </div>
        </div>
    </div>
        @endforeach



@endsection
