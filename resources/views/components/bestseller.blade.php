<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<div class="container my-3" id="bestseller-container" data-aos="fade-up">
    <div class="mt-5 row product-container">
        @foreach ($bestsellers as $bestseller)
            <div class="mb-2 overflow-hidden col-md-3 product position-relative">
                <img src="/image/{{ $bestseller->image }}" alt="Product 1" class="img-fluid">
                <div class="product-info">
                    <h3>{{ $bestseller->product }}</h3>
                    <span class="mt-auto">Rp {{ number_format($bestseller->price, 0, ',', '.') }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
