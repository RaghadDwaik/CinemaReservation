
@extends('dashboard.movies.index')

<script src="https://cdn.tailwindcss.com"></script>
@section('content')
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-6 white-text">Contact Us</h1>



          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">

            <form action="{{route('dashboard.contact.send')}}" method="POST">
                @csrf
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                      <div class="relative">
                        <label for="name" class="leading-7 text-sm white-text">Name</label>

                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>
                    <div class="p-2 w-1/2">
                      <div class="relative">
                        <label for="email" class="leading-7 text-sm white-text">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>
                    <div class="p-2 w-full">
                      <div class="relative">
                        <label for="message" class="leading-7 text-sm white-text">Message</label>
                        <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      </div>
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="flex mx-auto bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg custom-text-color white-text">Submit</button>
                    </div>

                  </div>
            </form>

          </div>
        </div>
      </section>
      @endsection
      @push('styles')
      <style>
      .white-text {
        color: white;
    }
    .custom-text-color {
    background-color: #EEC438; /* Gold color */
}

    </style>
    @endpush
