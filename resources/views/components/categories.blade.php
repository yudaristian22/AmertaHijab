    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <div class="my-3">
        <div class="container" data-aos="fade-up">
            <div class="mt-5 row" data-aos="fade-up">
                @foreach ($clients as $client)
                    <div class="mb-4 col-md-4 category-item">
                        <div class="category-img-wrap">
                            <img src="/image/{{ $client->image }}" alt="Hijab" class="category-img">
                            <div class="category-overlay">
                                <h5>{{ $client->title }}</h5>
                                <p>{{ $client->description }}</p>
                                <a href="https://linktr.ee/AmertaHijab.com" class="btn btn-shop">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
