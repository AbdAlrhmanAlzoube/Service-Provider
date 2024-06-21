@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Service Reservations</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
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
                </div>
            </div>
        </div>
    </div>
@endsection
