<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Discover the best hijabs at AMERTAHIJAB. Your trusted partner for high-quality and stylish hijabs.">
    <meta name="keywords" content="hijab, AMERTAHIJAB, hijab fashion, hijab styles, best hijabs">
    <title>Welcome to AMERTAHIJAB - Your Trusted Hijab Partner</title>
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

<body class="">
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- End Navbar -->

    <!-- Carousel -->
    <x-carousel :sliders="$sliders" />
    <!-- End Carousel -->

    <!-- Categories -->
    <x-title>
        <x-slot name="slot">CATEGORIES</x-slot>
        <x-slot name="slot2">See all products that fall into this category</x-slot>
    </x-title>
    <x-categories :clients="$clients" />
    <!-- EndCategories -->

    <!-- bestseller -->
    <x-title>
        <x-slot name="slot">BEST SELLER</x-slot>
        <x-slot name="slot2">Top Selling Product</x-slot>
    </x-title>
    <x-bestseller :bestsellers="$bestsellers" />
    <!-- Endbestseller -->

    <!-- Services -->
    <x-title>
        <x-slot name="slot">SERVICES</x-slot>
        <x-slot name="slot2">We provide the best range of services to support your needs, from production to
            distribution of high-quality hijab! distribution of high quality hijab</x-slot>
    </x-title>
    <x-services :services="$services" />
    <!-- End Services -->

    <!-- gallery Section -->
    <x-title>
        <x-slot name="slot">GALLERY</x-slot>
        <x-slot name="slot2">Discover Your Unique Look in Our Gallery</x-slot>
    </x-title>
    <x-gallery :portfolios="$portfolios" />
    <!-- End gallery Section -->

    <!-- Testimonial -->
    <x-title>
        <x-slot name="slot">TESTIMONIAL</x-slot>
        <x-slot name="slot2">What They Say?</x-slot>
    </x-title>
    <x-testimonial :testimonials="$testimonials" />
    <!-- End Testimonial -->

    <!-- Upcoming event -->
    <x-horizontalline></x-horizontalline>
    <x-upcomingevent :upcomingevents="$upcomingevents" />
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
    <script src="/assets/vendor/mdb/js/mdb.es.min.js"></script>
</body>

</html>
