@extends('layouts.orders')

@section('content')

<h1>orders Update</h1>
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

<form action="{{ route('orders.update', $order->id) }}" method="post">
    @csrf
    @method('put')
    <input type="number" name="id" class="form-control mb-3" placeholder="Order id" value="{{ $order->id }}"/>

    <input type="text" name="order_number" class="form-control mb-3" placeholder="order number" value="{{ $order->order_number }}"/>

    <input type="number" name="user_id" class="form-control mb-3" placeholder="user id" value="{{ $order->user_id }}"/>

    <input list="status" name="status" class="form-control mb-3" value="{{ $order->status }}">
    <datalist id="status">
        <option value="pending"> </option>
        <option value="processing"> </option>
        <option value="completed"> </option>
        <option value="cancelled"> </option>
    </datalist>

    <input type="number" name="grand_total" class="form-control mb-3" placeholder="grand total" value="{{ $order->grand_total }}"/>

    <input type="number" name="item_count" class="form-control mb-3" placeholder="item count" value="{{ $order->item_count }}"/>

    <input type="number" name="is_paid" class="form-control mb-3" placeholder="is paid" value="{{ $order->is_paid }}"/>

    <input type="text" name="payment_method" class="form-control mb-3" placeholder="payment method" value="{{ $order->payment_method }}"/>

    <input type="text" name="shipping_fullname" class="form-control mb-3" placeholder="fullname" value="{{ $order->shipping_fullname }}"/>

    <input type="text" name="shipping_address" class="form-control mb-3" placeholder="address" value="{{ $order->shipping_address }}"/>

    <input type="text" name="shipping_city" class="form-control mb-3" placeholder="city" value="{{ $order->shipping_city }}"/>

    <input type="text" name="shipping_state" class="form-control mb-3" placeholder="state" value="{{ $order->shipping_state }}"/>

    <input type="number" name="shipping_zipcode" class="form-control mb-3" placeholder="zipcode" value="{{ $order->shipping_zipcode }}"/>

    <input type="number" name="shipping_phone" class="form-control mb-3" placeholder="phone" value="{{ $order->shipping_phone }}"/>


    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
