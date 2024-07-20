<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Sarana Teknologi Komunikasi - CONNECT YOUR BUSINESS TO A WORLD OF POSSIBILITIES.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: "Space Grotesk", sans-serif;
    }
    ::-webkit-resizer{
      display: none;
    }
    .slick-slide {
      padding: 0 20px;
    }
  </style>
</head>
<body>
  <div class="p-3 d-none d-md-block" style="background: #101526 !important;">
    <div class="container">
      <div class="d-flex">
        <div class="text-white me-5"><i class="fa-solid fa-phone text-white me-1"></i> {{ $profile->phone_number }} | {{ $profile->optional_phone_number }}</div>
        <div class="text-white"><i class="fa-solid fa-envelope text-white me-1"></i> {{ $profile->email }}</div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('logo.png') }}" alt="" width="150" height="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav m-auto mb-md-0 mb-3 gap-0 gap-md-3">
          <li class="nav-item">
            <a class="nav-link text-dark" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#partner">Partner</a>
          </li>
        </ul>
        <div class="">
          <a href="" class="btn btn-warning text-white w-100" style="background: #FF8329 !important;">Request a call</a>
        </div>
      </div>
    </div>
  </nav>
  <div id="home" style="background-image: linear-gradient(to right, rgba(0, 144, 210, 0.7), rgba(0,0,0,0)), url('{{ asset('view-large-ship-water.jpg') }}'); background-size: cover; background-position: center; height: 89vh;">
    <div class="container" style="height: 100%;">
      <div class="row align-items-center" style="height: 100%;">
        <div class="col col-md-6">
          <div class="display-5 fw-medium text-white mb-3">{{ $profile->title }}</div>
          <div class="col-3 border border-white border-bottom mb-3"></div>
          <div class="text-white fs-5">{{ $profile->subtitle }}</div>
        </div>
      </div>
    </div>
  </div>
  <section class="py-0 py-md-5" style="background: #EFEFEF;">
    <div class="container py-5">
      <div class="text-center fs-2 fw-medium mb-2 mb-md-3">Why Traders Choose Us</div>
      <div class="m-auto col-1 border border-warning border-bottom mb-5"></div>
      <div class="row g-3">
        @foreach ($whyTradersChooseUs as $wtcu)
          <div class="col-12 col-md-4">
            <div class="card p-4 shadow-sm">
              <div class="d-flex">
                <div class="me-3">
                  <i class="{{ $wtcu->icon }} fs-1 text-warning"></i>
                </div>
                <div class="">
                  <div class="fw-medium fs-5 mb-2">{{ $wtcu->title }}</div>
                  <div class="text-muted lh-sm mb-md-4">{{ $wtcu->description }}</div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="py-0 py-md-5">
    <div id="about-us" class="container py-5">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="p-0 p-md-3">
            <img src="{{ asset('about-us.png') }}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="fs-2 fw-medium mt-0 mt-md-5 mb-3">About Us</div>
          <div class="col-1 border border-warning border-bottom mb-4"></div>
          <div class="fs-5 lh-sm">{{ $profile->description }}</div>
        </div>
      </div>
    </div>
  </section>
  <section style="background: #FF8329;">
    <div class="container py-5">
      <div class="d-block d-md-flex justify-content-center">
        <div class="col-md-4">
          <div class="fs-1 fw-medium text-center mb-2 mb-md-4 text-white">Visi</div>
          <div class="text-center fs-5 lh-sm text-white">{{ $profile->visi }}</div>
        </div>
        <div class="border border-end border-white mx-0 mx-md-5 my-3 my-md-0"></div>
        <div class="col-md-4">
          <div class="fs-1 fw-medium text-center mb-2 mb-md-4 text-white">Misi</div>
          <div class="text-center fs-5 lh-sm text-white">{{ $profile->misi }}</div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-0 py-md-5">
    <div id="experience" class="container py-5">
      <div class="row">
        <div class="col-md-6">
          {{-- <div class="d-flex" style="height: 450px; width: 100%;">
            <div class="border border-white border-5 rounded-4" style="height: 100%; width: 100%; background: url({{ asset('machinery-sky.jpg') }});">
            </div>
            <div style="width: 100%; height: 50%;">
              <div class="border border-white border-5 rounded-4" style="height: 100%; width: 100%; background: url({{ asset('modern-office-space-interior.jpg') }});"></div>
              <div class="border border-white border-5 rounded-4" style="height: 100%; width: 100%; background: url({{ asset('machinery-sky.jpg') }});"></div>
            </div>
          </div> --}}
          <div class="px-0 px-md-3 py-3 py-md-0">
            <img src="{{ asset('company-experience.png') }}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="fs-2 fw-medium mt-0 mb-2">Company Experience</div>
          <div class="fs-5 lh-sm mb-3">Lorem ipsum dolor sit amet consectetur. Sed dignissim lorem</div>
          <div class="row row-cols-md-2 row-cols-1 g-3">
            @foreach ($experiences as $experience)
              <div class="col">
                <div class="rounded p-3 lh-sm h-100" style="background: #FFDEC7;">{{ $experience->experience }}</div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="partner" style="background: #EFEFEF;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-3">
          <div class="display-5 fw-medium mb-3 mb-md-0">Our Partners</div>
        </div>
        <div class="col-md-9">
          <div class="our-partners">
            @foreach ($partners as $partner)
              <img src="/partners/logo/{{ $partner->logo }}" class="img-fluid" alt="">
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="background: #FF8329; height: 20px;"></div>
  <section class="py-0 py-md-5" style="background: #101526;">
    <div class="container py-3 py-md-5">
      <div class="row row-cols-4 justify-content-between">
        <div class="col-12 col-md-4">
          <div class="col-md-6 mb-3">
            <img src="{{ asset('logo-white.png') }}" class="img-fluid" alt="">
          </div>
          <div class="text-white lh-sm mb-3">{{{ $profile->footer_description }}}</div>
        </div>
        <div class="col-12 col-md-auto">
          <div class="text-white fw-medium fs-3 mb-3 mt-3">Menu</div>
          <div class="text-white mb-3"><a href="#home" class="text-white text-decoration-none">Home</a></div>
          <div class="text-white mb-3"><a href="#about-us" class="text-white text-decoration-none">About Us</a></div>
          <div class="text-white mb-3"><a href="#experience" class="text-white text-decoration-none">Experience</a></div>
          <div class="text-white mb-3"><a href="#partner" class="text-white text-decoration-none">Partner</a></div>
        </div>
        <div class="col-12 col-md-3">
          <div class="text-white fw-medium fs-3 mb-3 mt-3">Address & Contact</div>
          <div class="d-flex mb-3">
            <i class="fa-solid fa-location-dot fs-4 text-white me-3"></i>
            <div class="text-white">{{ $profile->address }}</div>
          </div>
          <div class="d-flex mb-3">
            <i class="fa-solid fa-envelope fs-4 text-white me-3"></i>
            <div class="text-white">{{ $profile->email }}</div>
          </div>
          <div class="d-flex mb-3">
            <i class="fa-solid fa-phone fs-4 text-white me-3"></i>
            <div class="d-block">
              <div class="text-white">{{ $profile->phone_number }}</div>
              <div class="text-white">{{ $profile->optional_phone_number }}</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-auto">
          <div class="text-white fw-medium fs-3 mb-3 mt-3">Social Network</div>
          <div class="d-flex justify-content-between">
            <a href="{{ $profile->x }}"><i class="fa-brands fa-x-twitter fs-4 text-white"></i></a>
            <a href="{{ $profile->instagram }}"><i class="fa-brands fa-instagram fs-4 text-white"></i></a>
            <a href="{{ $profile->facebook }}"><i class="fa-brands fa-facebook fs-4 text-white"></i></a>
            <a href="{{ $profile->youtube }}"><i class="fa-brands fa-youtube fs-4 text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.our-partners').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: false,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>
</body>
</html>