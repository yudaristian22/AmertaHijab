<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>About Us - AMERTAHIJAB</title>

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

        <x-navbar></x-navbar>

        <!-- Hero -->
        <div class="py-5 mb-5 text-center bg-image align-content-center position-relative"
            style="height: 400px; background-size: cover; background-position: center;">
            <!-- Background Image with Blur -->
            <div class="top-0 left-0 position-absolute w-100 h-100"
                style="background-image: url('image/banner 2.png'); filter: blur(8px); background-size: cover; background-position: center;">
            </div>

            <!-- Dark overlay for background dimming -->
            <div class="top-0 left-0 position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>

            <!-- Content (Heading) -->
            <div class="d-flex justify-content-center align-items-center h-100 position-relative z-index-1">
                <div class="text-white">
                    <h1 class="mb-3 fw-bold">About Us</h1>
                </div>
            </div>
        </div>
        <!-- Hero -->

        <!-- about us -->
        <x-aboutus></x-aboutus>
        <!-- end about us -->

        <x-horizontalline></x-horizontalline>
        <!-- teams -->
        <div class="py-5 mt-5 teams bg-light">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">OUR TEAM</h2>
                </div>
                <p class="mt-3 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                    provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                    quod et eum, aperiam cum est amet! Hic, vero.
                </p>
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="mt-5 col-md-3" data-aos="fade-up">
                            <div class="card" style="width: 18rem">
                                <img src="/image/{{ $team->image }}" class="card-img-top" alt="" />
                                <div class="text-center card-body">
                                    <h5 class="card-title fw-bold">{{ $team->title }}</h5>
                                    <p class="card-text text-muted">{{ $team->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end teams -->

        <!-- Client -->
        <x-categories></x-categories>
        <!-- EndClient -->

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
