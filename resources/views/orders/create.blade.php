@extends('layouts.orders')

@section('content')

<h1>orders Create</h1>
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

<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <input type="number" name="id" class="form-control mb-3" placeholder="Order id"/>

    <input type="text" name="order_number" class="form-control mb-3" placeholder="order number"/>

    <input type="number" name="user_id" class="form-control mb-3" placeholder="user id"/>

    <input list="status" name="status" class="form-control mb-3" placeholder="status">
    <datalist id="status">
        <option value="pending"> </option>
        <option value="processing"> </option>
        <option value="completed"> </option>
        <option value="cancelled"> </option>
    </datalist>

    <input type="number" name="grand_total" class="form-control mb-3" placeholder="grand total"/>

    <input type="number" name="item_count" class="form-control mb-3" placeholder="item count"/>

    <input type="number" name="is_paid" class="form-control mb-3" placeholder="is paid"/>

    <input list="payment_method" name="payment_method" class="form-control mb-3" placeholder="payment method">
    <datalist id="payment_method">
        <option value="cash on delivery"> </option>
        <option value="paypal"> </option>
    </datalist>

    <input type="text" name="shipping_fullname" class="form-control mb-3" placeholder="fullname"/>

    <input type="text" name="shipping_address" class="form-control mb-3" placeholder="address"/>

    <input type="text" name="shipping_city" class="form-control mb-3" placeholder="city"/>

    <input type="text" name="shipping_state" class="form-control mb-3" placeholder="state"/>

    <input type="number" name="shipping_zipcode" class="form-control mb-3" placeholder="zipcode"/>

    <input type="number" name="shipping_phone" class="form-control mb-3" placeholder="phone"/>
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
