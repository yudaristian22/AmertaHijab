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
<x-navbar></x-navbar>
<div class="container py-5">
    <x-horizontalline></x-horizontalline>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Event Title -->
            <h1 class="mb-4 text-center fw-bold">{{ $upcomingevent->title }}</h1>

            <!-- Event Date -->
            <p class="text-center text-muted">
                <i class="bi bi-calendar-event"></i>
                {{ \Carbon\Carbon::parse($upcomingevent->date)->format('l, d F Y') }}
            </p>

            <!-- Event Image -->
            <div class="mb-4 text-center">
                <img src="/image/{{ $upcomingevent->image }}" class="rounded shadow img-fluid"
                    alt="{{ $upcomingevent->title }}">
            </div>

            <!-- Event Short Description -->
            <p class="text-center text-muted fs-5">{{ $upcomingevent->short_description }}</p>

            <!-- Event Content -->
            <div class="mt-4" style="line-height: 1.8; font-size: 1.1rem; text-align:justify">
                {!! nl2br(e($upcomingevent->content)) !!}
            </div>

            <!-- Back to Events Button -->
            <div class="mt-5 text-center">
                <a href="https://linktr.ee/AmertaHijab.com" class="btn btn-submit">
                    BUY NOW
                </a>
            </div>
        </div>
    </div>
</div>
<x-horizontalline></x-horizontalline>
<x-footer></x-footer>
<script src="/assets/vendor/jquery/jquery-3.7.1.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/fontawesome/js/all.min.js"></script>
<script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
<script src="/assets/vendor/aos/dist/aos.js"></script>
<script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/assets/vendor/mdb/js/mdb.es.min.js"></script>
