<!-- resources/views/orders/view_order.blade.php -->
@extends('customer.index')

@section('content')
    <div class="container mt-5">
        <h1>My Orders</h1>
        @if($orders->isEmpty())
            <p>You have no orders.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        <td>{{ $order->status }}</td>
                        <td>${{ number_format($order->total, 2) }}</td>
                        <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">View Details</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
