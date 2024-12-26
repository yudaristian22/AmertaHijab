<div class="py-5 my-5 upcoming-events position-relative">
    <!-- Background Image -->
    <img src="/Image/banner.png" class="top-0 img-fluid w-100 h-100 position-absolute start-0" alt="Background Image"
        style="object-fit: cover; z-index: -1; filter: brightness(50%);">
    <div class="container mt-5 position-relative" data-aos="zoom-in">
        <div class="mb-5 text-center text-white">
            <h2 class="fw-bold">Upcoming Event</h2>
            <p>Here are some of the events that are and things to come</p>
        </div>
        <div class="row upcoming-events-grid g-4 justify-content-center">
            @foreach ($upcomingevents as $upcomingevent)
                <div class="col-md-4">
                    <div class="text-white border-0 card bg-dark event-card h-100">
                        <img src="/image/{{ $upcomingevent->image }}" class="card-img"
                            alt="{{ $upcomingevent->title }}">
                        <div
                            class="text-center card-img-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title fw-bold">{{ $upcomingevent->title }}</h5>
                            <p class="card-text">{{ $upcomingevent->date }}</p>
                            <a href="{{ route('upcomingevent.show', $upcomingevent->id) }}"
                                class="btn btn-light btn-sm fw-bold">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
