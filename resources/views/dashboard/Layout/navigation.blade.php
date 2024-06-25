<button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="{{route('dashboard.movies.index')}}">Home</a></li>
                <li><a href="#movies">Movies</a></li>
                <li><a href="{{route('dashboard.Layout.aboutus')}}">About Us</a></li>
                <li><a href="{{route('dashboard.contact')}}">Contact Us</a></li>
                <li><a href="{{ route('dashboard.Layout.event') }}">Event</a></li>

                @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="join-us">Join Us</a></li>

                @endif



                @if(Auth::check())
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>

                        <!-- Logout Form -->
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
                @else
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    </div>
                </div>
                @endif
                <!-- Logout Form end -->

                <li class="icon"><a href="{{ route('dashboard.Layout.search') }}"><i class="fas fa-search"></i></a></li>
            </ul>
        </nav>
    </header>
