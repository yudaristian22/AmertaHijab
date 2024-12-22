    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <div class="py-5 mt-5 services bg-brown">
        <div class="container">
            <div class="title-container" data-aos="fade-up">
                <h2 class="text-center fw-bold">SERVICES</h2>
                <p class="mt-4 text-center">
                    <q>
                        We provide the best range of services to support your needs, from production to distribution of
                        high-quality hijab! distribution of high quality hijab!
                    </q>
                </p>
                <x-horizontalline></x-horizontalline>
            </div>
            <div class="mt-5 articles row" data-aos="fade-up">
                @foreach ($services as $service)
                    <div class="mb-4 col-md-4">
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
