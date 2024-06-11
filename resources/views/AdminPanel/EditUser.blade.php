@extends('AdminPanel.AdminIndex')

@section('title')
    Edit User
@endsection

@section('content')
    <h2 class="mb-4">Edit Movie</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.updateU', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control"  placeholder="U.N" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" value="{{ $user->password }}" class="form-control" id="image" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text"  value="{{ $user->phone }}" class="form-control" id="phone" rows="3" required></input>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age </label>
                <input type="text" name="age" value="{{ $user->age }}" class="form-control" id="age" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update User</button>
            </div>
        </form>
    </div>
@endsection

@section('bottom_button')
    <div class="mb-3 text-center">
        <a href="{{ route('AdminPanel.AddUser') }}" class="btn btn-primary">Add User</a>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src="script.js"></script>
@endpush
