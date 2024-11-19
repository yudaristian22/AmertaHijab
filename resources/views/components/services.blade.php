<div class="py-5 mt-5 services bg-light">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">SERVICES</h2>
        </div>
        <p class="mt-4 text-center">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim,
            facilis!
        </p>
        <div class="mt-5 row" data-aos="fade-up">
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="card service-card">
                        <img src="/image/{{ $service->image }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ $service->description }}.</p>
                            <a href="/service1" class="btn btn-learnmore">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
