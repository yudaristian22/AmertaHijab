<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - AMERTAHIJAB</title>
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

<body class="bg-tertiary">

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

    <!-- Contact -->
    <x-gridimage></x-gridimage>

    {{-- Social Media --}}
    <x-title>
        <x-slot name="slot">SOCIAL MEDIA</x-slot>
        <x-slot name="slot2">Stay Connected</x-slot>
    </x-title>
    <x-socialmedia></x-socialmedia>

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
