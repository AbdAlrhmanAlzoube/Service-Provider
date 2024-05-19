@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Create Order</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="service_reservation_id">Service Reservation</label>
                <select name="service_reservation_id" id="service_reservation_id" class="form-control">
                    @foreach($serviceReservations as $reservation)
                        <option value="{{ $reservation->id }}">{{ $reservation->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
            </div>
            <div class="form-group">
                <label for="delivery_date">Delivery Date</label>
                <input type="date" name="delivery_date" id="delivery_date" class="form-control" value="{{ old('delivery_date') }}">
            </div>
            <div class="form-group">
                <label for="additional_details">Additional Details</label>
                <textarea name="additional_details" id="additional_details" class="form-control">{{ old('additional_details') }}</textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
@endsection
