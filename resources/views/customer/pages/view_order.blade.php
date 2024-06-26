<!-- resources/views/orders/view_order.blade.php -->
@extends('customer.index')

@section('content')
    <div class="container mt-5">
        <h1>My Orders</h1>
        <h5>User: {{ $user->first_name }} {{ $user->last_name }}</h5>
        <h5>Email: {{ $user->email }}</h5>
        @if($orders->isEmpty())
            <p>You have no orders.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>Service Reservation</th>
                    <th>Service Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        <td>{{ $order->status }}</td>
                        <td>${{ number_format($order->price, 2) }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->serviceReservation->title }}</td>
                        <td>{{ $order->serviceReservation->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection


