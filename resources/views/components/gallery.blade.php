    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <div class="mt-5 teams">
        <div class="container">
            <div class="mt-5 row">
                <div class="col-md-12">
                    <div class="mansory portfolio-container" data-aos="fade-up">
                        <div class="mansory-sizer">
                            @foreach ($portfolios as $portfolio)
                                <div class="m-2 mansory-item portfolio-item">
                                    <img src="/image/{{ $portfolio->image }}" alt="" class="m-2 img-fluid" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
