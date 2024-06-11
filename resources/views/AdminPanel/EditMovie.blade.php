@extends('AdminPanel.AdminIndex')

@section('title')
    Edit Movie
@endsection

@section('content')
    <h2 class="mb-4">Edit Movie</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.updateM', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="movieName" class="form-label">Movie Name</label>
                <input type="text" name="movie_name" value="{{ $movie->movie_name }}" class="form-control" id="movieName" placeholder="U.N" required>
            </div>
            
            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" name="language" value="{{ $movie->language }}" class="form-control" id="language" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" value="{{ $movie->image }}" class="form-control" id="image" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" required>{{ $movie->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="releaseDate" class="form-label">Release Date</label>
                <input type="date" name="release_date" value="{{ $movie->release_date }}" class="form-control" id="releaseDate" required>
            </div>

            <div class="mb-3">
                <label for="runTime" class="form-label">Run Time</label>
                <input type="text" name="run_time" value="{{ $movie->run_time }}" class="form-control" id="runTime" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Movie Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="" disabled>Select Movie Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type }}" {{ $movie->type == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" value="{{ $movie->rating }}" class="form-control" id="rating" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update Movie</button>
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
