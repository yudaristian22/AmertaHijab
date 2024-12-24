<div class="mt-5 portfolio-us">
    <div class="container">
        <div class="title-container" data-aos="fade-up">
            <h2 class="text-center fw-bold">GALLERY</h2>
            <p class="mt-3 text-center">
                <q>
                    Discover the beauty of our exclusive hijab and fashion collections. A wide selection lovingly
                    designed
                    to complement your style every day.
                </q>
            </p>
            <x-horizontalline></x-horizontalline>
        </div>
        <div class="mt-5 row">
            <div class="col-md-12">
                <div class="grid portfolio-container" data-aos="zoom-in-up">
                    @foreach ($portfolios as $portfolio)
                        <div class="grid-item portfolio-item filter-{{ $portfolio->category }}">
                            <a href="/image/{{ $portfolio->image }}" data-lightbox="portfolio">
                                <img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
