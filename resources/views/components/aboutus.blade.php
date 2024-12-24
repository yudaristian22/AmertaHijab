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
    <div class="container">
        <div class="mt-5 row">
            <div class="col-md-6" data-aos="fade-up">
                <h3 class="fw-bold about-us-title">
                    {{ $about->judul }}
                </h3>
                <p class="mt-4 about-us-subtitle">
                    {{ $about->subjudul }}
                </p>
                <p>
                    {{ $about->deskripsi_1 }}
                </p>
                <ul class="list-group list-group-flush" style="background-color: transparent;">
                    <li class="list-group-item text-start" style="background-color: transparent;">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item text-start" style="background-color: transparent;">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item text-start" style="background-color: transparent;">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item text-start" style="background-color: transparent;">
                        <img src="image/arabic 1.svg" class="icon float-start me-4" alt="icon" />
                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <div class="image-container">
                    <img src="image/slider 2.jpg" class="rounded-2 img-fluid" alt="">
                </div>
            </div>
            <div class="container py-5" data-aos="fade-up">
                <div class="text-center row justify-content-center">
                    <!-- Stat Card 1 -->
                    <div class="mb-4 col-md-4 col-sm-6">
                        <div class="p-3 border-0 shadow-sm card stat-card">
                            <div class="mb-2 d-flex align-items-center justify-content-center">
                                <span class="text-white badge bg-secondary me-3">1</span>
                                <h5 class="mb-0">Total Orders</h5>
                            </div>
                            <p class="mb-0 fs-4 fw-bold">10B+</p>
                        </div>
                    </div>
                    <!-- Stat Card 2 -->
                    <div class="mb-4 col-md-4 col-sm-6">
                        <div class="p-3 border-0 shadow-sm card stat-card">
                            <div class="mb-2 d-flex align-items-center justify-content-center">
                                <span class="text-white badge bg-secondary me-3">2</span>
                                <h5 class="mb-0">Active Customers</h5>
                            </div>
                            <p class="mb-0 fs-4 fw-bold">1B+</p>
                        </div>
                    </div>
                    <!-- Stat Card 3 -->
                    <div class="mb-4 col-md-4 col-sm-6">
                        <div class="p-3 border-0 shadow-sm card stat-card">
                            <div class="mb-2 d-flex align-items-center justify-content-center">
                                <span class="text-white badge bg-secondary me-3">3</span>
                                <h5 class="mb-0">Store Branch</h5>
                            </div>
                            <p class="mb-0 fs-4 fw-bold">50+</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
