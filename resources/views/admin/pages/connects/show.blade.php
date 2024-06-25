@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Connect Details</h1>

        <div class="card mt-4">
            <div class="card-header">
                Connect #{{ $connect->id }}
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Email:</strong> {{ $connect->email }}
                </div>
                <div class="mb-3">
                    <strong>Phone:</strong> {{ $connect->phone }}
                </div>
                <div class="mb-3">
                    <strong>Subject Type:</strong> {{ $connect->subject_type }}
                </div>
                <div class="mb-3">
                    <strong>Subject:</strong> {{ $connect->subject }}
                </div>
                <div class="mb-3">
                    <strong>Message:</strong>
                    <p>{{ $connect->message }}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('connects.index') }}" class="btn btn-primary">Back to List</a>
                <form action="{{ route('connects.destroy', $connect) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
