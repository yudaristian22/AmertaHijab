@foreach ($testimonials as $testimonial)
    <div class="mb-4 col-md-6 col-lg-4">
        <div class="text-center testimonial-card">
            <img src="/image/{{ $testimonial->image }}" alt="User Image" class="mx-auto testimonial-image">
            <div class="mt-3 testimonial-content">
                <q>{{ $testimonial->description }}</q>
            </div>
            <div class="testimonial-name">{{ $testimonial->title }}</div>
        </div>
    </div>
@endforeach
<div class="d-flex justify-content-center">
    {{ $testimonials->links('pagination::bootstrap-5') }}
</div>
