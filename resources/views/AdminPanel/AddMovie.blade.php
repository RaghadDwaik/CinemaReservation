@extends('AdminPanel.AdminIndex')

@section('title')
    Add Movie
@endsection

@section('content')
    <h2 class="mb-4">Add Movie</h2>
    <div class="section" style="width:70%; margin:auto; border: 1px solid black; padding:10px;">
        <form action="{{ route('AdminPanel.storeM') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Movie Name</label>
                <input type="text" name="movie_name" class="form-control" id="exampleFormControlInput1"
                     required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">language</label>
                <input name="language" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
    <label for="exampleFormControlFile1" class="form-label">Image</label>
    <input name="image" type="file" class="form-control" id="exampleFormControlFile1" required>
</div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
</textarea> </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Release Date</label>
                <input type="date" name="release_date" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Run Time </label>
                <input name="run_time" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            

            <div class="mb-3">
              <label for="movieType" class="form-label">Movie Type</label>
               <select name="type" id="movieType" class="form-control" required>
                   <option value="" disabled selected>Select Movie Type</option>
                   <option value="Action">Action</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Drama">Drama</option>
                  <option value="Drama">Animation</option>

       
    </select>
</div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Rating</label>
                <input name="rating" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Add Movie</button>
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
