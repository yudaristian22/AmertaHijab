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

        <div class="mt-5 row">
            @foreach ($testimonials as $testimonial)
                <div class="mt-3 col-md-6" data-aos="fade-up">
                    <div class="shadow shadow-md">
                        <div class="p-5 card-body testimonial-item">
                            <img src="/image/{{ $testimonial->image }}" alt=""
                                class="img-testimonial float-start rounded-circle me-3" />
                            <strong class="d-block">{{ $testimonial->title }}</strong>
                            <p class="mt-3 fst-italic fs-5">
                                <i class="fa fa-quote-left"></i>
                                {{ $testimonial->description }}
                                <i class="fa fa-quote-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end testimonials -->
