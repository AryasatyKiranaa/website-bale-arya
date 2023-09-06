<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title> THE BALE </title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link href="{{ asset('css/desain.css') }}" rel="stylesheet">



</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">


                <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-group input-group-lg">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search "
                            aria-label="Search">

                        <button type="submit" class="form-control" id="submit">
                            <i class="bi-search"></i>
                        </button>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Welcome To Bale</h1>

                            <p class="text-white">Tempat tepat untuk memilih gedung impian anda.</p>

                            <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Mulai Memilih</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            @foreach ($allPlaces as $place)
                            <div class="owl-carousel-info-wrap item">
                                <a href="{{ route('place', ['id' => $place->place_id]) }}">
                                    <img src="{{ asset('images/' . $place->image) }}" class="owl-carousel-image img-fluid"
                                        alt="">
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="latest-section pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Meetings</h4>
                        </div>
                    </div>
                    @foreach ($meetingsPlaces as $place)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div
                            class="custom-block custom-block-overlay d-flex flex-column align-items-center justify-content-center py-4">
                            <a href="{{ route('place', ['id' => $place->place_id]) }}" class="custom-block-image-wrap">
                                <img src="{{ asset('images/' . $place->image) }}" class="custom-block-image img-fluid"
                                    alt="Building Image">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info text-center">
                                <h5 class="mb-1">
                                    <a href="{{ route('place', ['id' => $place->place_id]) }}">
                                        {{ $place->place_name }}
                                       
                                    </a>
                                </h5>
                            </div>
                            <p class="mb-0 text-center">
                                {{ $place->place_desc }}
                            </p>
                            <p class="mb-0 text-center">Capacity: {{ $place->capacity }}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Weddings</h4>
                        </div>
                    </div>
                    @foreach ($weddingsPlaces as $place)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div
                            class="custom-block custom-block-overlay d-flex flex-column align-items-center justify-content-center py-4">
                            <a href="{{ route('place', ['id' => $place->place_id]) }}" class="custom-block-image-wrap">
                                <!-- <img src="{{ asset('images/' . $place->image) }}" class="custom-block-image img-fluid"
                                    alt="Building Image"> -->
                                    <img src="{{ asset('images/' . $place->image) }}" class="custom-block-image img-fluid" onerror="this.onerror=null;this.src='images/nophoto.png';" />
                            </a>

                            <div class="custom-block-info custom-block-overlay-info text-center">
                                <h5 class="mb-1">
                                    <a href="{{ route('place', ['id' => $place->place_id]) }}">
                                        {{ $place->place_name }}
                                    </a>
                                </h5>
                            </div>
                            <p class="mb-0 text-center">
                                {{ $place->place_desc }}
                            </p>
                            <p class="mb-0">Total Capacity: {{ $place->capacity }}
                                @if ($place->theater)
                                <br />
                                Theater : {{ $place->theater }}
                                @endif
                                @if ($place->roundtable)
                                <br />
                                Round Table : {{ $place->roundtable }}
                                @endif
                                @if ($place->longtable)
                                <br />
                                Long Table : {{ $place->longtable }}
                                @endif
                                @if ($place->cocktail)
                                <br />
                                Cocktail : {{ $place->cocktail }}
                                @endif

                            </p>

                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Events</h4>
                        </div>
                    </div>
                    @foreach ($eventsPlaces as $place)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div
                            class="custom-block custom-block-overlay d-flex flex-column align-items-center justify-content-center py-4">
                            <a href="{{ route('place', ['id' => $place->place_id]) }}" class="custom-block-image-wrap">
                                <img src="{{ asset('images/' . $place->image) }}" class="custom-block-image img-fluid"
                                    alt="Building Image">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info text-center">
                                <h5 class="mb-1">
                                    <a href="{{ route('place', ['id' => $place->place_id]) }}">
                                        {{ $place->place_name }}
                                    </a>
                                </h5>
                            </div>
                            <p class="mb-0 text-center">
                                {{ $place->place_desc }}
                            </p>
                            <p class="mb-0">Total Capacity: {{ $place->capacity }}


                            </p>

                        </div>
                    </div>
                    @endforeach





    </main>


    <footer class="site-footer">
        <div class="container">
            <div class="row">



                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contact</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> (031) 2456 789</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#"> info@bale.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Download Mobile</h6>

                    <div class="site-footer-thumb mb-4 pb-2">
                        <div class="d-flex flex-wrap">
                            <a href="#">
                                <img src="{{url('/images/app-store.png')}}" class="me-3 mb-2 mb-lg-0 img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="{{url('/images/play-store.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <h6 class="site-footer-title mb-3">Social</h6>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container pt-5">
            <div class="row align-items-center">



                <div class="col-lg-7 col-md-9 col-12">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Homepage</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Browse Building</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Help Center</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>