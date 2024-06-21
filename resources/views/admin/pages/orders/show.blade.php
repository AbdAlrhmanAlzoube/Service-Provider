@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Order Details</h1>

        <div class="card mt-4">
            <div class="card-header">
                Order #{{ $order->id }}
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>User:</strong> {{ $order->user->fisrt_name }} {{$order->user->last_name}}
                </div>
                <div class="mb-3">
                    <strong>Service Reservation:</strong> {{ $order->serviceReservation->title }}
                </div>
                <div class="mb-3">
                    <strong>Price:</strong> {{ $order->price }}
                </div>
                <div class="mb-3">
                    <strong>Delivery Date:</strong> {{ $order->delivery_date }}
                </div>
                <div class="mb-3">
                    <strong>Additional Details:</strong>
                    <p>{{ $order->additional_details }}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to List</a>
                <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
