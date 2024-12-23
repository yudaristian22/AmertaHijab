    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />

    <div class="mt-5 about-us">
        <div class="container">
            <div class="title-container" data-aos="fade-up">
                <h2 class="text-center fw-bold">{{ $slot }}</h2>
                <x-horizontalline></x-horizontalline>
            </div>
        </div>
    </div>
    <div class="container mb-2">
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
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item text-start">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item text-start">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item text-start">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
        </div>
    </div>
