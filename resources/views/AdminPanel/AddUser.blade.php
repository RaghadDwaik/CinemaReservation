@extends('AdminPanel.AdminIndex')

@section('title')
    Add User
@endsection

@section('content')
    <h2 class="mb-4">Add User</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input name="password" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input name="email" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                <input name="phone" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">User Type </label>
                <input type="text" name="usertype"  class="form-control" id="age" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Age</label>
                <input name="age" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add User</button>
            </div>
        </form>
    </div>
@endsection

@section('bottom_button')
    <div class="mb-3 text-center">
        <a href="#" class="btn btn-primary">Add User</a>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="style.css">
@endpush

@push('scripts')
    <script src=""></script>
@endpush
