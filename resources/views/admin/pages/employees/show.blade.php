@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee Details</h4>
                    <p class="card-text h5">User: {{ $employee->user->first_name }} {{ $employee->user->last_name }}</p>
                    <br>
                    <p class="card-text h5">Type: {{ $employee->type }}</p>
                    <br>
                    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>

    </div>

@endsection
