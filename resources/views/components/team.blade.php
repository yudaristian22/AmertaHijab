    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <!-- Aos -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    <div class="py-5 teams bg-light">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">OUR TEAM</h2>
            </div>
            <p class="mt-3 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, non
                provident? At tenetur assumenda odio ipsum ex nam earum, ipsa quia
                quod et eum, aperiam cum est amet! Hic, vero.
            </p>
            <div class="row">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="mt-5 col-md-3" data-aos="fade-up">
                            <div class="card" style="width: 18rem">
                                <img src="/image/{{ $team->image }}" class="card-img-top" alt="" />
                                <div class="text-center card-body">
                                    <h5 class="card-title fw-bold">{{ $team->title }}</h5>
                                    <p class="card-text text-muted">{{ $team->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
