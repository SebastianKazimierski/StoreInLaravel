@extends('layouts.orders')

@section('content')
    <h1>orders Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Id</h5>
        <p class="fw-bold">{{ $order->id }}</p>

        <h5 class="text-warning"></h5>
        <p class="fw-bold">$ {{ $order->order_number }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->user_id }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->status }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->grand_total }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->item_count }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->is_paid }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->payment_method }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_fullname }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_address }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_city }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_state}}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_zipcode }}</p>
        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $order->shipping_phone }}</p>

    </div>

@endsection
