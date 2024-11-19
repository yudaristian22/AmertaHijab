<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>PERBAMA UIN BANDUNG</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/assets/css/styles.css" />

        <!-- Aos -->
        <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

        <!-- Fontawesome -->
        <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    </head>

    <body>
        <!-- Navbar -->
        <x-navbar></x-navbar>
        <!-- End Navbar -->

        <!-- Carousel -->
        <x-carousel></x-carousel>
        <!-- End Carousel -->

        <!-- About Section -->
        <div class="mt-5 about-us">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">ABOUT US</h2>
                </div>
                <div class="mt-5 row">
                    <div class="col-md-6" data-aos="fade-right">
                        <h3 class="fw-bold about-us-title">
                            {{ $about->judul }}
                        </h3>
                        <p class="mt-4 fw-bolder about-us-subtitle">
                            {{ $about->subjudul }}
                        </p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <p>
                            {{ $about->deskripsi_1 }}
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-check-double primary"></i>
                                {{ $about->kelebihan_1 }}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-double primary"></i>

                                {{ $about->kelebihan_2 }}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-double primary"></i>

                                {{ $about->kelebihan_3 }}
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check-double primary"></i>

                                {{ $about->kelebihan_4 }}
                            </li>
                        </ul>
                        <p class="mt-2">
                            {{ $about->deskripsi_2 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Section -->

        <!-- Services -->
        <x-services></x-services>
        <!-- End Services -->

        <!-- gallery Section -->
        <x-gallery></x-gallery>
        <!-- End gallery Section -->

        <!-- Categories -->
        <x-categories></x-categories>
        <!-- EndCategories -->

        <!-- Footer -->
        <x-footer></x-footer>
        <!-- End Footer -->

        <!-- to top -->
        <a href="#" class="p-3 btn-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- End to top -->

        <script src="/assets/vendor/jquery/jquery-3.7.1.min.js"></script>
        <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
        <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
        <script src="/assets/vendor/aos/dist/aos.js"></script>
        <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="/assets/js/app.js"></script>
    </body>

</html>
