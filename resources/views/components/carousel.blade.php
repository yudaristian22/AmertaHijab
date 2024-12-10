 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

 <!-- Custom CSS -->
 <link rel="stylesheet" href="/assets/css/styles.css" />

 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
     <div class="carousel-indicators">
         @foreach ($sliders as $index => $slider)
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                 class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : '' }}"
                 aria-label="Slide {{ $index + 1 }}"></button>
         @endforeach
     </div>
     <div class="carousel-inner">
         @foreach ($sliders as $index => $slider)
             <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                 <img src="/image/{{ $slider->image }}" class="d-block w-100 carousel-img" alt="slider">
                 <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                     <h2 class="mb-3 text-white fw-bold" data-aos="zoom-in">{{ $slider->title }}</h2>
                     <p class="mb-2 text-white fs-5"data-aos="zoom-in">{{ $slider->description }}
                     </p>
                     <p class="mb-4 text-white fs-4"data-aos="zoom-in">
                         <span class="typing-effect" data-aos="zoom-in">Available now on Shopee,
                             TikTok, and more!</span>
                     </p>
                     <a href="https://linktr.ee/AmertaHijab.com" target="_blank"
                         class="shadow shadow-lg btn btn-carousel" data-aos="zoom-in">BUY
                         NOW</a>
                 </div>
             </div>
         @endforeach
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>
