<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<div class="container my-3">
    <div class="mt-5 row justify-content-center">
        @foreach ($bestsellers as $bestseller)
            <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="mb-4 card product-card">
                    <img src="/image/{{ $bestseller->image }}" alt="Produk" class="img-fluid">
                    <div class="card-body d-flex flex-column">
                        <h4 class="fs-5">{{ $bestseller->product }}</h4>
                        <span class="mt-auto">Rp {{ number_format($bestseller->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
