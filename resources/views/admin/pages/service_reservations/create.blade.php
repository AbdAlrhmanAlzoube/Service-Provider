@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Create Service Reservation</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service-reservations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label for="picture_for_clarification">Picture for Clarification</label>
                <input type="file" name="picture_for_clarification" id="picture_for_clarification" class="form-control">
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
@endsection
