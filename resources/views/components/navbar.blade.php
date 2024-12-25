 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />

 <!-- Custom CSS -->
 <link rel="stylesheet" href="/assets/css/styles.css" />

 <!-- HTML -->
 <nav class="py-3 shadow-sm navbar navbar-expand-lg sticky-top">
     <div class="container">
         <a class="navbar-brand" href="/">AMERTAHIJAB</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="/portfolio">GALLERY</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="/services">SERVICES</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle {{ Request::is('about*') ? 'active' : '' }}" href="/about"
                         role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         ABOUT
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item {{ Request::is('about') ? 'active' : '' }}" href="/about">ABOUT
                                 US</a></li>
                         <li><a class="dropdown-item {{ Request::is('about/team') ? 'active' : '' }}"
                                 href="/about/team">TEAM</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">CONTACT</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
