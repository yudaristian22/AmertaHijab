<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Our Team - Meet the People Behind AMERTAHIJAB</title>
    <link type="image/png" sizes="16x16" rel="icon" href="/icon/icons8-hijab-ink-16.png">
    <link type="image/png" sizes="72x72" rel="icon" href="/icon/icons8-hijab-ink-72.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/icon/icons8-hijab-ink-96.png">

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

    <!-- teams -->
    <x-title>
        <x-slot name="slot">OUR TEAM</x-slot>
        <x-slot name="slot2">Meet the Experts Behind Our Success</x-slot>
    </x-title>
    <x-team :teams="$teams" />
    <!-- end teams -->
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
