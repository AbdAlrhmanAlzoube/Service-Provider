@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>User Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $user->id }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Name:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $user->first_name }} {{ $user->last_name }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Email:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $user->email }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Type:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $user->type }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Image:</strong>
                    </div>
                    <div class="col-md-8">
                        @if($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}" alt="User Image" width="150" height="150">
                        @else
                            No image
                        @endif
                    </div>
                </div>
                <!-- Add more fields here as needed -->
            </div>
        </div>
    </div>
@endsection
