<div class="mt-5 portfolio-us">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">GALLERY</h2>
        </div>
        <div class="mt-4 row">
            <div class="col-md-12 d-flex justify-content-center">
                <ul class="list-unstyled d-flex portfolio-filter">
                    <li data-filter="*" class="px-4 py-2 text-white filter-active">
                        ALL
                    </li>
                    <li data-filter=".filter-web" class="px-4 py-2">Web</li>
                    <li data-filter=".filter-design" class="px-4 py-2">Design</li>
                    <li data-filter=".filter-photo" class="px-4 py-2">Photography</li>
                </ul>
            </div>
        </div>
        <div class="mt-5 row">
            <div class="col-md-12">
                <div class="mansory portfolio-container" data-aos="zoom-in-up">
                    <div class="mansory-sizer"></div>
                    @foreach ($portfolios as $portfolio)
                        <div class="m-2 mansory-item portfolio-item filter-web">
                            <img src="/image/{{ $portfolio->image }}" alt="" class="m-2 img-fluid" />
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
