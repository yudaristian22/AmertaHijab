    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <div class="container mb-4">
        <div class="mt-5 row">
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="fw-bold about-us-title">
                    {{ $about->judul }}
                </h3>
                <p class="mt-4 about-us-subtitle">
                    {{ $about->subjudul }}
                </p>
            </div>
            <div class="justify-between col-md-6" data-aos="fade-left">
                <p>
                    {{ $about->deskripsi_1 }}
                </p>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item text-start">
                        <i class="fa fa-check primary fa-2x float-start me-4"></i>
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item text-start">
                        <i class="fa fa-check primary fa-2x float-start me-4"></i>

                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item text-start">
                        <i class="fa fa-check primary fa-2x float-start me-4"></i>
                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item text-start">
                        <i class="fa fa-check primary fa-2x float-start me-4"></i>

                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
        </div>
    </div>
