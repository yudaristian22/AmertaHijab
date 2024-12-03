<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery - AMERTAHIJAB Creations</title>

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

    <!-- Gallery -->
    <div class="py-5 teams bg-light">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">GALLERY</h2>
            </div>
            <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                quod et eum, aperiam cum est amet! Hic, vero.
            </p>
            <div class="mt-4 row">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portfolio-filter">
                        <li data-filter="*" class="px-4 py-2 text-white filter-active">
                            ALL
                        </li>
                        <li data-filter=".filter-web" class="px-4 py-2">Pashmina</li>
                        <li data-filter=".filter-design" class="px-4 py-2">Dress</li>
                        <li data-filter=".filter-photo" class="px-4 py-2">Rok</li>
                    </ul>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-md-12">
                    <div class="mansory portfolio-container" data-aos="zoom-in-up">
                        <div class="mansory-sizer"></div>
                        @foreach ($portfolios as $portfolio)
                            <div class="m-2 mansory-item portfolio-item filter-web">
                                <img src="/image/{{ $portfolio->image }}" alt="" class="m-2 img-fluid" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Gallery -->

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
