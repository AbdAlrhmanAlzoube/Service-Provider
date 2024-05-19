@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1>Employee Details</h1>
        
        <div class="card">
            <div class="card-header">
                Employee Information
            </div>
            <div class="card-body">
                <h5 class="card-title">User: {{ $employee->user->first_name }} {{ $employee->user->last_name }}</h5>
                <p class="card-text">Type: {{ $employee->type }}</p>
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
