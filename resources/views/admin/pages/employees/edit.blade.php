@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Employee</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="forms-sample" action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ $employee->user_id == $user->id ? 'selected' : '' }}>{{ $user->first_name }} {{ $user->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="ADMIN" {{ old('type', $employee->type) == 'Delivery' ? 'selected' : '' }}>Delivery</option>
                                <option value="CUSTOMER" {{ old('type', $employee->type) == 'Manger' ? 'selected' : '' }}>Manger</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
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
