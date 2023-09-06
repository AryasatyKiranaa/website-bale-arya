<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $place->place_name }}</title>

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


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0">{{ $place->place_name }}</h2>
                    </div>

                </div>
            </div>
        </header>

        <br><br>
        <section class="latest-section pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">{{ $place->place_name }}</h4>
                        </div>  
                        
                        <div class="row">

                            <div class="col-lg-6 col-12">
                                <div class="custom-block-icon-wrap">
                                    <div class="custom-block-image-wrap custom-block-image-detail-page">
                                        <img src="{{ asset('images/' . $place->image) }}"
                                            class="custom-block-image img-fluid" alt="Building Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="custom-block-icon-wrap">
                                    <h2 class="mb-2">{{ $place->place_name }}</h2>
                                    
                                    <p>{{ $place->place_desc }}
                                        <br><br>
                                        Capacity: {{ $capacity->capacity }}
                                        @if ($capacity->theater)
                                        <br />
                                        Theater : {{ $capacity->theater }}
                                        @endif
                                        @if ($capacity->roundtable)
                                        <br />
                                        Round Table : {{ $capacity->roundtable }}
                                        @endif
                                        @if ($capacity->longtable)
                                        <br />
                                        Long Table : {{ $capacity->longtable }}
                                        @endif
                                        @if ($capacity->cocktail)
                                        <br />
                                        Cocktail : {{ $capacity->cocktail }}
                                        @endif
                                    </p>

                                </div>
                            </div>





                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <br><br>
        <section class="contact-section section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Book {{ $place->place_name }} Now</h4>
                        </div>

                        <form action="{{ route('storeBooking', ['id' => $place->place_id]) }}" method="post"
                            class="custom-form contact-form" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Full Name" required>

                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required>

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="mobilenumber" required>

                                        <label for="floatingInput">Mobile Number</label>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="numberofguest" id="numberofguest" class="form-control"
                                                placeholder="numberofguest" required>

                                            <label for="floatingInput">Number of Guest</label>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <input type="date" name="booking_date" id="booking_date"
                                                    class="form-control" placeholder="desireddate" required>

                                                <label for="floatingInput">Desired Date</label>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <div class="form-floating">
                                                    <input type="date" name="booking_date2" id="booking_date2"
                                                        class="form-control" placeholder="alternativedate">

                                                    <label for="floatingInput">Alternative Date 1</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-floating">
                                                    <input type="date" name="booking_date3" id="booking_date3"
                                                        class="form-control" placeholder="alternativedate">

                                                    <label for="floatingInput">Alternative Date 2</label>
                                                </div>
                                                

                                                <div class="col-lg-4 col-12 ms-auto">
                                                    <button type="submit" class="form-control">Submit</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    </form>
                </div>

           
            </div>
        </section>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

    </main>


    <footer class="site-footer">
        <div class="container">
            <div class="row">



                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contact</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> (031) 2456 789</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">info@bale.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Download Mobile</h6>

                    <div class="site-footer-thumb mb-4 pb-2">
                        <div class="d-flex flex-wrap">
                            <a href="#">
                                <img src="images/app-store.png" class="me-3 mb-2 mb-lg-0 img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="images/play-store.png" class="img-fluid" alt="">
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