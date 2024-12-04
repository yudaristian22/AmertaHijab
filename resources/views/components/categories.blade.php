    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <div class="mt-5 clients">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">CATEGORIES</h2>
            </div>
            <p class="mt-4 text-center"><q>
                    See all products that fall into this
                    category</p>
            </q>
            <x-horizontalline></x-horizontalline>
            <div class="mt-5 row" data-aos="fade-up">
                @foreach ($clients as $client)
                    <div class="mb-4 col-md-4 category-item">
                        <div class="category-img-wrap">
                            <img src="/image/{{ $client->image }}" alt="Hijab" class="category-img">
                            <div class="category-overlay">
                                <h5>{{ $client->title }}</h5>
                                <p>{{ $client->description }}</p>
                                <a href="/hijab" class="btn btn-shop">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
