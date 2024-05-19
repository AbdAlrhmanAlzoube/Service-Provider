@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Service Reservations</h1>
            <a href="{{ route('service-reservations.create') }}" class="btn btn-primary">Create Service Reservation</a>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    {{-- <th>User</th> --}}
                    <th>Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($serviceReservations as $serviceReservation)
                    <tr>
                        <td>{{ $serviceReservation->id }}</td>
                        {{-- <td>{{ $serviceReservation->user->first_name }} {{ $serviceReservation->user->last_name }}</td> --}}
                        <td>{{ $serviceReservation->type }}</td>
                        <td>{{ $serviceReservation->title }}</td>
                        <td>{{ $serviceReservation->description }}</td>
                        <td>{{ $serviceReservation->address }}</td>
                        <td>
                            @if($serviceReservation->picture_for_clarification)
                                <img src="{{ asset('storage/' . $serviceReservation->picture_for_clarification) }}" alt="Picture" style="width: 50px; height: 50px;">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('service-reservations.show', $serviceReservation) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('service-reservations.edit', $serviceReservation) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('service-reservations.destroy', $serviceReservation) }}" method="POST" style="display:inline-block;">
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
@endsection
