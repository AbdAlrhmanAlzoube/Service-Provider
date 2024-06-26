@extends('customer.index')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-black">Order Party: {{ $serviceReservation->title }}</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('place-order', $serviceReservation->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="delivery_date">Delivery Date</label>
                    <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
                </div>
                <div class="form-group">
                    <label for="additional_details">Additional Details</label>
                    <textarea class="form-control" id="additional_details" name="additional_details" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Order</button>
            </form>
        </div>
    </div>
@endsection
