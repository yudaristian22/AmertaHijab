    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <div class="services">
        <div class="container">
            <div class="articles row" data-aos="fade-up">
                @foreach ($services as $service)
                    <div class="mb-4 col-md-4 mt-2 ">
                        <article class="service-card">
                            <figure>
                                <img src="/image/{{ $service->image }}" class="card-img-top">
                            </figure>
                            <div class="article-preview">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">{{ $service->description }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
