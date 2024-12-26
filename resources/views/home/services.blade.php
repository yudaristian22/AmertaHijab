<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Our Services - Explore What We Offer | AMERTAHIJAB</title>

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
    <x-navbar />
    <!-- End Navbar -->

    <!-- services -->
    <x-title>
        <x-slot name="slot">SERVICES</x-slot>
        <x-slot name="slot2">We provide the best range of services to support your needs, from production to
            distribution of high-quality hijab! distribution of high quality hijab! </x-slot>
    </x-title>
    <x-services :services="$services" />
    <!-- end services -->

    <x-title>
        <x-slot name="slot">CATEGORIES</x-slot>
        <x-slot name="slot2">See all products that fall into this category</x-slot>
    </x-title>
    <x-categories></x-categories>

    <x-horizontalline></x-horizontalline>
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
