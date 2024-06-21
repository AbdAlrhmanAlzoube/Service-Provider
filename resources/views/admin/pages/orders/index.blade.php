@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
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
                                    <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                    <td>{{ $order->serviceReservation->title }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->delivery_date }}</td>
                                    <td>{{ $order->additional_details }}</td>
                                    <td>
                                        <a href="{{ route('orders.show', $order) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
