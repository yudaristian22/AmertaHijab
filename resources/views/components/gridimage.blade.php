<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 image-grid">
        @foreach ($gridimages as $gridimages)
            <div class="col">
                <img src="/image/{{ $gridimages->image }}" alt="Image 1">
            </div>
        @endforeach
    </div>
</div>
