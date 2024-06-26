@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Service Reservation Details</h1>

        <div class="card mt-4">
            <div class="card-header">
                Service Reservation #{{ $serviceReservation->id }}
            </div>
            <div class="card-body">
                {{-- <div class="mb-3">
                    <strong>User:</strong> {{ $serviceReservation->user->first_name }} {{ $serviceReservation->user->last_name }}
                </div> --}}
                <div class="mb-3">
                    <strong>Type:</strong> {{ $serviceReservation->type }}
                </div>
                <div class="mb-3">
                    <strong>Title:</strong> {{ $serviceReservation->title }}
                </div>
                <div class="mb-3">
                    <strong>Description:</strong>
                    <p>{{ $serviceReservation->description }}</p>
                </div>
                <div class="mb-3">
                    <strong>Address:</strong> {{ $serviceReservation->address }}
                </div>
                <div class="mb-3">
                    <strong>Picture</strong>
                    @if($serviceReservation->picture)
                        <img src="{{ asset('storage/' . $serviceReservation->picture) }}" alt="Picture" style="max-width: 30%; height: auto;">
                    @else
                        <p>No picture provided</p>
                    @endif
                </div>

            </div>
            <div class="card-footer">
                <a href="{{ route('service-reservations.index') }}" class="btn btn-primary">Back to List</a>
                <a href="{{ route('service-reservations.edit', $serviceReservation) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('service-reservations.destroy', $serviceReservation) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
