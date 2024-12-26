<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 image-grid" data-aos="fade-up">
        @foreach ($gridimages as $gridimages)
            <div class="col grid-items">
                <img src="/image/{{ $gridimages->image }}" alt="Image 1" class="img-fluid">
            </div>
        @endforeach
    </div>
</div>
