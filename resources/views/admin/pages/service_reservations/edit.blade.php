@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Service Reservation</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" action="{{ route('service-reservations.update', $serviceReservation) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $serviceReservation->type) }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $serviceReservation->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $serviceReservation->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $serviceReservation->address) }}">
                        </div>
                        <div class="form-group">
                            <label for="picture_for_clarification">Picture for Clarification</label>
                            <input type="file" name="picture_for_clarification" id="picture_for_clarification" class="form-control">
                            @if($serviceReservation->picture_for_clarification)
                                <img src="{{ asset('storage/' . $serviceReservation->picture_for_clarification) }}" alt="Picture" style="max-width: 100%; height: auto;">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
