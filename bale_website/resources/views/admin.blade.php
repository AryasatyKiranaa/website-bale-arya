<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

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
                        <input name="search" type="search" class="form-control" id="search"
                            placeholder="Search Building" aria-label="Search">

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

                        <h2 class="mb-0">Admin Page</h2>
                    </div>

                </div>
            </div>
        </header>

        <br><br>
        <section class="contact-section section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Add New Building</h4>
                        </div>

                        <form action="{{ route('newplace') }}" method="post" class="custom-form contact-form" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Building Name" required>

                                        <label for="floatingInput">Building Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="" selected disabled>Choose Category</option>
                                            <option value="Events">Events</option>
                                            <option value="Meetings">Meetings</option>
                                            <option value="Weddings">Weddings</option>
                                        </select>
                                        <label for="category">Kategori</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="desc" id="desc" class="form-control"
                                            placeholder="desc" required>

                                        <label for="floatingInput">Description</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <!-- <input type="text" name="photo" id="photo" class="form-control"
                                            placeholder="photo" required> -->
                                            <input type="file" name="image" id="image" class="form-control" required>
                                        <label for="floatingInput">Image</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="capacity" id="capacity" class="form-control" placeholder="Capacity" required>
                                                <label for="capacity">Total Capacity</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="theater" id="theater" class="form-control" placeholder="Theater" >
                                                <label for="theater">Theater</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="roundtable" id="roundtable" class="form-control" placeholder="Roundtable" >
                                                <label for="roundtable">Round Table</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="longtable" id="longtable" class="form-control" placeholder="Longtable" >
                                                <label for="longtable">Long Table</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="cocktail" id="cocktail" class="form-control" placeholder="Cocktail" >
                                                <label for="cocktail">Cocktail</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </div>

                        </form>
                    </div>


                </div>
        </section>


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