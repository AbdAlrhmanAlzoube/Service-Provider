@extends('customer.index')

@section('content')
    <div class="row">
        <div class="col-md-5 mr-auto">
            <div class="border text-center">
                <img src="{{ Storage::url($serviceReservation->picture) }}" alt="{{ $serviceReservation->title }}" class="img-fluid p-5">
            </div>
        </div>
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="text-black">{{ $serviceReservation->title }}</h2>
            <p>{{ $serviceReservation->description }}</p>
            <p>
                <strong class="text-primary h4">${{ number_format($serviceReservation->price, 2) }}</strong>
            </p>
            <a href="{{ route('show-order-form', $serviceReservation->id) }}" class="btn btn-primary">Order Now</a>
        </div>
    </div>
@endsection
