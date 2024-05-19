@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order #{{ $order->id }}</h5>
                <p class="card-text"><strong>User:</strong> {{ $order->user->first_name }} {{ $order->user->last_name }}</p>
                <p class="card-text"><strong>Service Reservation:</strong> {{ $order->serviceReservation->title }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ $order->price }}</p>
                <p class="card-text"><strong>Delivery Date:</strong> {{ $order->delivery_date }}</p>
                <p class="card-text"><strong>Additional Details:</strong> {{ $order->additional_details }}</p>
                <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
            </div>
        </div>
    </div>
@endsection
