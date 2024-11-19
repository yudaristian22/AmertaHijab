<div class="mt-5 clients">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">CATEGORIES</h2>
        </div>
        <p class="mt-4 text-center fs-5">See all products that fall into this
            category</p>
        <div class="mt-5 row">
            @foreach ($clients as $client)
                <div class="col-md-4 mb-4 category-item">
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
