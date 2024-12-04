<div class="py-5 mt-5 services bg-light">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">SERVICES</h2>
        </div>
        <p class="mt-4 text-center">
            <q>
                We provide the best range of services to support your needs, from production to distribution of
                high-quality hijab! distribution of high quality hijab!
            </q>
        </p>
        <x-horizontalline></x-horizontalline>
        <div class="mt-5 row" data-aos="fade-up">
            @foreach ($services as $service)
                <div class="mb-4 col-md-4">
                    <div class="card service-card">
                        <img src="/image/{{ $service->image }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->title }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
