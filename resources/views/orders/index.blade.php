@extends('layouts.orders')

@section('content')
<h1>order CRUD</h1>
<a class="btn btn-link float-end" href="{{ route('orders.create') }}">Create order</a>

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
            <th scope="col">Order_number</th>
            <th scope="col">user_id</th>
            <th scope="col">status</th>
            <th scope="col">total</th>
            <th scope="col">item count</th>
            <th scope="col">paid</th>
            <th scope="col">payment_method</th>
            <th scope="col">shipping_fullname</th>
            <th scope="col">shipping_address</th>
            <th scope="col">shipping_city</th>
            <th scope="col">shipping_state</th>
            <th scope="col">shipping_zipcode</th>
            <th scope="col">phone number</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($orders as $order) {{-- Loop products --}}
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->order_number}}</td>
            <td>{{ $order->user_id}}</td>
            <td>{{ $order->status}}</td>
            <td>{{ $order->grand_total}}</td>
            <td>{{ $order->item_count}}</td>
            <td>{{ $order->is_paid}}</td>
            <td>{{ $order->payment_method}}</td>
            <td>{{ $order->shipping_fullname}}</td>
            <td>{{ $order->shipping_address}}</td>
            <td>{{ $order->shipping_city}}</td>
            <td>{{ $order->shipping_state}}</td>
            <td>{{ $order->shipping_zipcode}}</td>
            <td>{{ $order->shipping_phone}}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-order" href="{{ route('orders.show', $order->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-order" href="{{ route('orders.edit', $order->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-order">Delete</button>
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
