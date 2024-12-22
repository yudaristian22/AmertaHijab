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
            @foreach ($testimonials as $testimonial)
                <div class="mb-4 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class="card-text">{{ $testimonial->description }}</p>
                            <div class="mt-3 d-flex align-items-center">
                                <img src="/image/{{ $testimonial->image }}" class="rounded-circle" width="40"
                                    height="40" alt="User 1">
                                <div class="ml-2">
                                    <h6 class="mb-0">{{ $testimonial->title }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- end testimonials -->
