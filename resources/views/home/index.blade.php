<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to AMERTAHIJAB - Your Trusted Hijab Partner</title>

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
            <div class="title-container" data-aos="fade-up">
                <h2 class="text-center fw-bold">ABOUT US</h2>
                <x-horizontalline></x-horizontalline>
            </div>
            <x-aboutus></x-aboutus>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Services -->
    <x-services :services="$services" />
    <!-- End Services -->

    <!-- gallery Section -->
    <x-gallery></x-gallery>
    <!-- End gallery Section -->

    <!-- Categories -->
    <x-categories></x-categories>
    <!-- EndCategories -->

    <!-- Upcoming event -->
    <x-horizontalline></x-horizontalline>
    <div class="py-5 my-4 upcoming-events position-relative" data-aos="zoom-in">
        <!-- Background Image -->
        <img src="/Image/banner.png" class="top-0 img-fluid w-100 h-100 position-absolute start-0"
            alt="Background Image" style="object-fit: cover; z-index: -1; filter: brightness(50%);">
        <div class="container mt-5 position-relative">
            <div class="mb-5 text-center text-white">
                <h2 class="fw-bold">Upcoming Event</h2>
                <p>Here are some of the events that are and things to come</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-white border-0 card bg-dark event-card h-100">
                        <img src="/assets/img/p1.jpg" class="card-img" alt="New Product">
                        <div
                            class="text-center card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title fw-bold">New Product</h5>
                            <p class="card-text">Friday, 15 September 2021</p>
                            <a href="#" class="btn btn-light btn-sm fw-bold">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-white border-0 card bg-dark event-card h-100">
                        <img src="/assets/img/p1.jpg" class="card-img" alt="Big Sale">
                        <div
                            class="text-center card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title fw-bold">Big Sale</h5>
                            <p class="card-text">Friday, 15 September 2021</p>
                            <a href="#" class="btn btn-light btn-sm fw-bold">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-white border-0 card bg-dark event-card h-100">
                        <img src="/assets/img/p1.jpg" class="card-img" alt="Blog">
                        <div
                            class="text-center card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title fw-bold">Blog</h5>
                            <p class="card-text">Sunday, 17 September 2021</p>
                            <a href="#" class="btn btn-light btn-sm fw-bold">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-horizontalline></x-horizontalline>
    <!-- EndUpcoming event -->

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
