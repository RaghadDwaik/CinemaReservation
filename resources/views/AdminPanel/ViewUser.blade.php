@extends('AdminPanel.AdminIndex')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>All Users</h2>
        <a href="{{ route('AdminPanel.AddUser') }}" class="btn btn-primary">Add User</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->age }}</td>
                <td>
                <div class="d-flex">
                <a href="{{ route('AdminPanel.EditUser',$user->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                <form action="{{ route('AdminPanel.deleteU', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
