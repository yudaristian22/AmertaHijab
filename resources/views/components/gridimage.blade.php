<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- Aos -->
<link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css" />

<!-- Fontawesome -->
<link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />

<!-- gridimages -->
<div class="container my-5" id="gridimage-container" data-aos="fade-up">
    <div class="row justify-content-center image-grid" id="gridimage-content">
        @include('components.gridimage-content', ['gridimages' => $gridimages])
    </div>
</div>
<!-- end gridimages -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetchGridImages(page);
    });

    function fetchGridImages(page) {
        $.ajax({
            url: "/fetch-gridimages?page=" + page,
            success: function(data) {
                $('#gridimage-content').html(data);
            }
        });
    }
</script>
