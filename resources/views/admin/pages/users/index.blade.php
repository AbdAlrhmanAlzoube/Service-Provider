@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> #id </th>
                                <th> Full name </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> Type </th>
                                <th> Image </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->first_name}}  {{$user->last_name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->phone}} </td>
                                    <td> {{$user->type}} </td>
                                    <td>
                                        @if($user->image)
                                            <img src="{{ asset('storage/' . $user->image) }}" alt="User Image" width="50" height="50">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>


                                @endforeach

                            </tbody>
                        </table>

                        <div>{{$users->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
