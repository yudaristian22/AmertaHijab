<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - Get in Touch with AMERTAHIJAB</title>
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

    <!-- contact -->
    <div class="mb-5 contact">
        <div class="mb-5 maps">
            <iframe src="https://www.google.com/maps/embed?pb={{ $contacts->maps_embed }}" width="100%" height="430"
                style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <x-horizontalline></x-horizontalline>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-0 shadow shadow-xl card">
                        <div class="card-body">
                            <div class="container">
                                <div class="align-items-center row">
                                    <div class="col-md-4">
                                        <i class="fa fa-location-dot fa-2x icon float-start me-4"></i>
                                        <h4 class="fw-bold">Location</h4>
                                        <p class="ms-5">
                                            {{ $contacts->alamat }}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-envelope fa-2x icon float-start me-3"></i>
                                        <h4 class="fw-bold">Email</h4>
                                        <p class="ms-5">{{ $contacts->email }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-phone fa-2x icon float-start me-3"></i>
                                        <h4 class="fw-bold">Phone</h4>
                                        <p class="ms-5">{{ $contacts->telepon }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-md-12">
                    <div class="border-0 shadow shadow-xl card">
                        <div class="p-4 card-body">
                            <form action="{{ route('contact-form.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mt-4 col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name"
                                            name="name" />
                                    </div>
                                    <div class="mt-4 col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Email"
                                            name="email" />
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Subject"
                                            name="subject" />
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-md-12">
                                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your Message"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="mt-4 row">
                                    <button class="btn btn-submit" type="submit">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your message has been sent successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Success Modal -->

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
    <script>
        @if (session('success'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    </script>
</body>

</html>
