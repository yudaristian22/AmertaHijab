<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 image-grid">
        @foreach ($portfolios as $portfolio)
            <div class="col">
                <img src="/image/{{ $portfolio->image }}" alt="Image 1">
            </div>
        @endforeach
    </div>
</div>
