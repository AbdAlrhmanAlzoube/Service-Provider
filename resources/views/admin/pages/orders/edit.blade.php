@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Order</h4>
                    <form class="forms-sample" action="{{ route('orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->first_name }} {{ $user->last_name }}</option>
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
                                    <option value="{{ $serviceReservation->id }}" {{ $order->service_reservation_id == $serviceReservation->id ? 'selected' : '' }}>{{ $serviceReservation->title }}</option>
                                @endforeach
                            </select>
                            @error('service_reservation_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $order->price) }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $order->address) }}">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                @foreach(App\Enum\OrderStatusType::cases() as $status)
                                    <option value="{{ $status->value }}" {{ $order->status == $status->value ? 'selected' : '' }}>{{ $status->name }}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="delivery_date">Delivery Date</label>
                            <input type="date" name="delivery_date" id="delivery_date" class="form-control" value="{{ old('delivery_date', $order->delivery_date) }}">
                            @error('delivery_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="additional_details">Additional Details</label>
                            <textarea name="additional_details" id="additional_details" class="form-control">{{ old('additional_details', $order->additional_details) }}</textarea>
                            @error('additional_details')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
