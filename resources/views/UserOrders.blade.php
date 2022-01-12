@extends('layouts.app')

@section('content')

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
            <th scope="col">Order ID</th>
            <th scope="col">Order number</th>
            <th scope="col">your id</th>
            <th scope="col">status</th>
            <th scope="col">total</th>
            <th scope="col">item count</th>
            <th scope="col">payment_method</th>
            <th scope="col">shipping fullname</th>
            <th scope="col">shipping address</th>
            <th scope="col">shipping city</th>
            <th scope="col">shipping state</th>
            <th scope="col">shipping zipcode</th>
            <th scope="col">phone number</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($userorders as $order) {{-- Loop products --}}
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->order_number}}</td>
            <td>{{ $order->user_id}}</td>
            <td>{{ $order->status}}</td>
            <td>{{ $order->grand_total}}</td>
            <td>{{ $order->item_count}}</td>

            <td>{{ $order->payment_method}}</td>
            <td>{{ $order->shipping_fullname}}</td>
            <td>{{ $order->shipping_address}}</td>
            <td>{{ $order->shipping_city}}</td>
            <td>{{ $order->shipping_state}}</td>
            <td>{{ $order->shipping_zipcode}}</td>
            <td>{{ $order->shipping_phone}}</td>

        </tr>
        @endforeach

    </tbody>
</table>


@endsection
