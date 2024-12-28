<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- Aos -->
<link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

<!-- Fontawesome -->
<link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
<div class="mb-4 text-center teams">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($teams as $team)
                <div class="mt-4 col-md-3 col-sm-6" data-aos="fade-up">
                    <div class="card" style="width: 18rem; margin: auto;">
                        <img src="/image/{{ $team->image }}" class="card-img-top" alt="" />
                        <div class="text-center card-body">
                            <h3 class="card-title fw-bold">{{ $team->title }}</h3>
                            <p class="text-center card-text text-muted">{{ $team->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
