@extends('AdminPanel.AdminIndex')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>All Movies</h2>
        <a href="{{ route('AdminPanel.AddMovie') }}" class="btn btn-primary">Add Movie</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Language</th>
                <th>Description Number</th>
                <th>Release Date</th>
                <th>Type</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->language }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->type }}</td>
                <td>{{ $movie->rating }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('AdminPanel.EditMovie',$movie->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                        <form action="{{ route('AdminPanel.deleteM', $movie->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Movie?');">
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

