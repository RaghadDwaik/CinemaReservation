@extends('AdminPanel.AdminIndex')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>All Reservations</h2>
        <a href="#" class="btn btn-primary">Add Reservation</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ticketprice</th>
                <th>creation_date</th>
                <th>user_id </th>
                <th>show_movie_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservsation as $res)
            <tr>
                <td>{{ $res->id }}</td>
                <td>{{ $res->ticketprice }}</td>
                <td>{{ $res->creation_date }}</td>
                <td>{{ $res->user_id }}</td>
                <td>{{ $res->show_movie_id }}</td>
                <td>
                <a href="#" class="btn btn-primary btn-sm mr-2">Edit</a>
                <form action="#" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
@endsection
