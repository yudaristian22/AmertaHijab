<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- Aos -->
<link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

<!-- Fontawesome -->
<link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />

<!-- testimonials -->
<div class="mt-5 teams">
    <div class="container">
        <div class="title-container" data-aos="fade-up">
            <h2 class="text-center fw-bold">TESTIMONIAL</h2>
            <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                quod et eum, aperiam cum est amet! Hic, vero.
            </p>
            <x-horizontalline></x-horizontalline>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="container py-3">
                <div id="testimonialCarousel" class="carousel">
                    <div class="carousel-inner testi-inner">
                        @foreach ($testimonials as $testimonial)
                            <div class="carousel-item testi-item active">
                                <div class="p-2 shadow-sm shadow card rounded-3">
                                    <div class="quotes display-2 text-body-tertiary">
                                        <i class="bi bi-quote"></i>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">"{{ $testimonial->description }}"</p>
                                        <div class="mb-3 d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="pt-4 d-flex align-items-center">
                                            <img src="/image/{{ $testimonial->image }}" alt="testimonial"
                                                class="testi-img">
                                            <div>
                                                <h5 class="card-title fw-bold">{{ $testimonial->title }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- end testimonials -->
