@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Connects</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject Type</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($connects as $connect)
                                <tr>
                                    <td>{{ $connect->email }}</td>
                                    <td>{{ $connect->phone }}</td>
                                    <td>{{ $connect->subject_type }}</td>
                                    <td>{{ $connect->subject }}</td>
                                    <td>{{ $connect->message }}</td>
                                    <td>
                                        <a href="{{ route('connects.show', $connect) }}" class="btn btn-info btn-sm">View</a>
                                        <form action="{{ route('connects.destroy', $connect) }}" method="POST" style="display:inline-block;">
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
