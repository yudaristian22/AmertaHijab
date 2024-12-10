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
        <div class="mt-4 row" data-aos="fade-up">
            <div class="col-md-12 d-flex justify-content-center">
                <ul class="list-unstyled d-flex portfolio-filter">
                    <li data-filter="*" class="px-4 py-2 text-white filter-active">
                        ALL
                    </li>
                    <li data-filter=".filter-pashmina" class="px-4 py-2">PASHMINA</li>
                    <li data-filter=".filter-dress" class="px-4 py-2">DRESS</li>
                    <li data-filter=".filter-skirt" class="px-4 py-2">SKIRT</li>
                </ul>
            </div>
        </div>
        <div class="mt-5 row">
            <div class="col-md-12">
                <div class="mansory portfolio-container" data-aos="zoom-in-up">
                    <div class="mansory-sizer"></div>
                    @foreach ($portfolios as $portfolio)
                        <div class="m-2 mansory-item portfolio-item">
                            <img src="/image/{{ $portfolio->image }}" alt="" class="m-2 img-fluid" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
