
{{-- <div class="container">
    <ul>
        @foreach ($coupon as $coupon)
        <li>{{ $coupon->code }} - {{ $coupon->description }} - Save {{ $coupon->discount }}%</li>
        @endforeach
    </ul>
</div> --}}
{{-- @extends('dashboard.movies.index')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background: url('{{asset('img/background.jpg')}}') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <h2  style="text-align: center;">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg" style="border: none; background-color: rgba(33, 37, 41, 0.8);">
                    <img class="card-img-top" src="{{asset('img/coupon/Coupon-01.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 1.2rem; color: white;">We care for our visitors and from time to time we provide small gifts to them. You are the lucky one today!</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom">Get it now
                                <i class="fa fa-gem"></i>
                            </a>
                            <a href="{{route('dashboard.movies.movie')}}" class="btn btn-custom-outline" data-dismiss="modal">No, thanks</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="script.js"></script>

@push('styles')
<style>
    .btn-custom,
    .btn-custom-outline {
        background-color: transparent;
        color: white;
        border: 2px solid #228EE5;
        border-radius: 10px;
        padding: 10px 20px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-custom:hover,
    .btn-custom-outline:hover {
        background-color: #0e0d0d80;
        color: #EEC438;
    }
</style>
@endpush --}}


@extends('dashboard.movies.index')

@section('content')
<section class="dark" >
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle"> Upcoming Events</h1>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.youtube.com/watch?v=npd8RywPJ_E" target="blank">
				<img class="postcard__img" src="{{asset('img/movie_images/a_part_of_you_poster.jpg')}}" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.youtube.com/watch?v=npd8RywPJ_E" target="blank">A Part of You</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2024-06-24 12:00:00">
						<i class="fas fa-calendar-alt mr-3"></i>Mon, June 24th 2024
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">A teenager struggles to pick up the pieces of her shattered world in this emotional and bittersweet coming-of-age drama about those who are left behind.
                </div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play red">
						<a href="https://www.youtube.com/watch?v=npd8RywPJ_E" target="blank"><i class="fas fa-play mr-2" ></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>


        <article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.youtube.com/watch?v=DjmNWIymTf4" target="blank">
				<img class="postcard__img" src="{{asset('img/movie_images/paradox_effect.jpg')}}" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.youtube.com/watch?v=npd8RywPJ_E" target="blank">Paradox Effect</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2024-06-24 12:00:00">
						<i class="fas fa-calendar-alt mr-3"></i>Mon, June 24th 2024
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">An ex junkie witnesses a murder. She is forced to cooperate with the killer to save her daughter's life. She must fight time, the police and criminal underworld to save the only person who means something to her.


                </div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>90 mins.</li>
					<li class="tag__item play red">
						<a href="https://www.youtube.com/watch?v=DjmNWIymTf4" target="blank"><i class="fas fa-play mr-2" ></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>

	</div>

</section>
@endsection

@push('styles')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");

    body {

        font-size: 16px;
        color: #ffffff;

    }

    a, a:hover {
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    #pageHeaderTitle {
        margin: 4rem 0;
        text-align: center;
        font-size: 2.5rem;
    }

    .dark {

        padding: 50px 0;
    }

    .postcard {
        flex-wrap: wrap;
        display: flex;
        box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
        border-radius: 10px;
        margin: 1rem 0;
        overflow: hidden;
        position: relative;
        color: #ffffff;
    }

    .postcard.dark {
        background-color: #18151fca;
    }

    .postcard a {
        color: inherit;
    }

    .postcard h1, .postcard .h1 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    .small {
        font-size: 80%;
    }

    .postcard__title {
        font-size: 2.75rem;
    }

    .postcard__img {
        max-height: 200px;
        width: 100%;

        object-fit: cover;
    }

    .postcard__bar {
        width: 50px;
        height: 5px;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #424242;
        transition: width 0.2s ease;
    }

    .postcard__text {
        padding: 1rem;
        display: flex;
        flex-direction: column;
    }

    .postcard__preview-txt {
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: justify;
        height: 100%;
    }

    .postcard__tagbox {
        display: flex;
        flex-flow: row wrap;
        font-size: 14px;
        margin: 10px 0 0 0;
        padding: 0;
        justify-content: center;
    }

    .postcard__tagbox .tag__item {
        display: inline-block;
        background: rgba(83, 83, 83, 0.4);
        border-radius: 3px;
        padding: 2.5px 10px;
        margin: 0 5px 5px 0;
        cursor: default;
        user-select: none;
        transition: background-color 0.3s;
    }

    .postcard__tagbox .tag__item:hover {
        background: rgba(83, 83, 83, 0.8);
    }

    .postcard__tagbox .play.blue:hover {
        background: #EEC438;
        color: #EEC438;
    }

    .blue .postcard__title:hover {
        color: #EEC438;
    }

    .blue .postcard__bar {
        background-color: #EEC438;
    }

    .blue::before {
        background-image: linear-gradient(-30deg, rgba(0, 118, 189, 0.1), transparent 50%);
    }

    .red .postcard__title:hover {
        color: #EEC438;
    }

    .red .postcard__bar {
        background-color: #EEC438;
    }

    .red::before {
        background-image: linear-gradient(-30deg, rgba(189, 21, 11, 0.1), transparent 50%);
    }

    @media screen and (min-width: 769px) {
        .postcard {
            flex-wrap: nowrap;
        }

        .postcard__title {
            font-size: 2rem;
        }

        .postcard__tagbox {
            justify-content: start;
        }

        .postcard__img {
            max-width: 300px;
            max-height: 100%;
            transition: transform 0.3s ease;
        }

        .postcard__text {
            padding: 2rem;
            width: 100%;
        }

        .postcard:hover .postcard__img {
            transform: scale(1.1);
        }

        .postcard:nth-child(2n+1) {
            flex-direction: row;
        }

        .postcard:nth-child(2n+0) {
            flex-direction: row-reverse;
        }
    }

    @media screen and (min-width: 1024px) {
        .postcard__text {
            padding: 1.5rem 2rem;
        }
    }
</style>
@endpush
