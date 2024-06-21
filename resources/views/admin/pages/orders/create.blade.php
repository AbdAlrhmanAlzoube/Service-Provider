@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Order</h4>
                    <form class="forms-sample" action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->first_name }} {{$user->last_name}}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="service_reservation_id">Service Reservation</label>
                            <select name="service_reservation_id" id="service_reservation_id" class="form-control">
                                @foreach($serviceReservations as $serviceReservation)
                                    <option value="{{ $serviceReservation->id }}" {{ old('service_reservation_id') == $serviceReservation->id ? 'selected' : '' }}>{{ $serviceReservation->title }}</option>
                                @endforeach
                            </select>
                            @error('service_reservation_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="delivery_date">Delivery Date</label>
                            <input type="date" name="delivery_date" id="delivery_date" class="form-control" value="{{ old('delivery_date') }}">
                            @error('delivery_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="additional_details">Additional Details</label>
                            <textarea name="additional_details" id="additional_details" class="form-control">{{ old('additional_details') }}</textarea>
                            @error('additional_details')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
