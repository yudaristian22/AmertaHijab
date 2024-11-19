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

        <!-- breadcumbs -->
        <div class="py-2 breadcumbs">
            <div class="container">
                <div class="text-white d-flex justify-content-between align-items-center">
                    <h2>Services</h2>
                    <ol class="d-flex list-unstyled">
                        <li>Home</li>
                        <li>Services</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end breadcumbs -->

        <!-- services -->
        <x-services></x-services>
        <!-- end services -->

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
