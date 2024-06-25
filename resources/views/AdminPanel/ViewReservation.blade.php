@extends('AdminPanel.AdminIndex')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>All Reservations</h2>
        <a href="{{ route('AdminPanel.AddReservation') }}" class="btn btn-primary">Add Reservation</a>
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
            @foreach ($reservation as $res)
            <tr>
                <td>{{ $res->id }}</td>
                <td>{{ $res->ticketprice }}</td>
                <td>{{ $res->creation_date }}</td>
                <td>{{ $res->user_id }}</td>
                <td>{{ $res->show_movie_id }}</td>
                <td>
                <div class="d-flex">
                <a href="{{ route('AdminPanel.EditRes',$res->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                <form action="{{ route('AdminPanel.deleteR',$res->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Reservation?');">
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
