@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Orders</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add Order</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Service Reservation</th>
                    <th>Price</th>
                    <th>Delivery Date</th>
                    <th>Additional Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                        <td>{{ $order->serviceReservation->title }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>{{ $order->additional_details }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
