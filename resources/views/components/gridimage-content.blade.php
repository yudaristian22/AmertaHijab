@foreach ($gridimages as $gridimage)
    <div class="mb-4 col-md-6 col-lg-3">
        <div class="text-center grid-items">
            <img src="/image/{{ $gridimage->image }}" alt="Grid Image" class="img-fluid">
        </div>
    </div>
@endforeach
<div class="d-flex justify-content-center">
    {{ $gridimages->links('pagination::bootstrap-5') }}
</div>
