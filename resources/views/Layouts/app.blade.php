<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Reservation</title>
    <link rel="stylesheet" href="{{ asset('css/webstyles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Coupon</a></li>
                <li><a href="#" class="join-us">Join Us</a></li>
                <li>
                    <select>
                        <option value="en">EN</option>
                        <option value="ar">Arabic</option>
                    </select>
                </li>
                <li class="icon"><a href="#"><i class="fas fa-user"></i></a></li>
                <li class="icon"><a href="#"><i class="fas fa-search"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="movie-info">
                <h1>Harry Potter</h1>
                <p>An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family
                    and the terrible evil that haunts the magical world....
                    <span style="color:#EEC438">See more</span>
                </p>
                <div class="movie-details">
                    <span class="duration">1h 55m</span>
                    <span class="language">ENGLISH</span>
                </div>
                <div class="tags">
                    <span>Adventure</span>
                    <span>Family</span>
                    <span>Fantasy</span>
                </div>
                <button class="book-now">Book Now!</button>
            </div>

        </section>
    </main>
</body>

</html>
