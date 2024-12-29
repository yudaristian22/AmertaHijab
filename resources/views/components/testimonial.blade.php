<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- Aos -->
<link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

<!-- Fontawesome -->
<link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />

<!-- testimonials -->
<div class="container my-5" id="testimonial-container" data-aos="fade-up">
    <div class="row justify-content-center" id="testimonial-content">
        @include('components.testimonial-content', ['testimonials' => $testimonials])
    </div>
</div>
<!-- end testimonials -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchTestimonials(page);
    });

    function fetchTestimonials(page) {
        $.ajax({
            url: "/fetch-testimonials?page=" + page,
            success: function(data) {
                $('#testimonial-content').html(data);
            }
        });
    }
</script>
