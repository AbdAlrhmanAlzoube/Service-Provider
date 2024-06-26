@extends('customer.index')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
            <p><a href="{{route('view-reservations')}}" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
            <p><a href="{{route('view_order')}}" class="btn btn-md height-auto px-4 py-3 btn-secondary">View Order</a></p>
        </div>
    </div>
@endsection
