@extends('main.main')
<style>

</style>
@section('content')
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ url ('frontend/images/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-success" type="submit">Log In</button>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Start Dashboard -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="slide-1">
        <img src="{{ url ('frontend/images/Slide1.png') }}" alt="" class="d-block w-100">
        <div class="carousel-caption text-center caption-1">
          <h2>BEST TO PLACE</h2>
          <h1 class="place-title fw-bold">SUNGAI MUDAL</h1>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="slide-1">
        <img src="{{ url ('frontend/images/Slide2.png') }}" alt="" class="d-block w-100">
        <div class="carousel-caption text-center caption-1">
          <h2>BEST TO PLACE</h2>
          <h1 class="place-title fw-bold">KEMBANG SOKA</h1>
        </div>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="{{ url ('frontend/images/Carousel.jpeg') }}" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Dashboard -->

<!-- Start Maps -->
<div class="container">
  <h4 class="my-3 text-center">Tourist Spot Map</h4>

  <!-- <div class="mx-auto p-2 border" alt="Maps" style="width: 200px;">

  </div> -->
</div>
<div class="container">
  <div id="map" style="width: 100%; height: 700px;">

  </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdzI2kr63vsG6k3Jbflcod3KCNshxQmwU"></script>
<script>
  function showMap(lat, long) {
    var coord = {
      lat: lat,
      lng: long
    }
    new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(-7.764876852128963, 110.16146280541825),
      disableDefaultUI: false
    });
    new google.map.Marker({
      position: coord,
      map: map
    })
  }
  showMap(0, 0)
</script>

<!-- End Maps -->

<!-- Start Most Searched-->
<div class="container-fluid bg-light py-5 px-5 my-3">
  <h4 class="py-3">Most searched tourist spots</h4>
  <div class="row">
    <div class="col-lg-6 my-2">
      <h7 class="fw-bold">Sed ut perspiciatis</h7>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
      <a href="#" class="btn btn-outline-primary">Read more</a>
    </div>
    <div class="col-lg-6 my-2">
      <h7 class="fw-bold">Sed ut perspiciatis</h7>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
      <a href="#" class="btn btn-outline-primary">Read more</a>
    </div>
    <div class="col-lg-6 my-2">
      <h7 class="fw-bold">Sed ut perspiciatis</h7>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
      <a href="#" class="btn btn-outline-primary">Read more</a>
    </div>
    <div class="col-lg-6 my-2">
      <h7 class="fw-bold">Sed ut perspiciatis</h7>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
      <a href="#" class="btn btn-outline-primary">Read more</a>
    </div>
  </div>
</div>
<!-- End Most Searched-->

<!-- Start Information -->
<div class="container w-50 my-5">
  <div class="about text-center my-5">
    <h6 class="fw-bold">About</h6>
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
  </div>
  <div class="information text-center my-5">
    <h6 class="fw-bold">More Information</h6>
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
  </div>
  <div class="contact text-center my-5">
    <h6 class="fw-bold">Contact</h6>
    <div class="row mx-auto w-10">
      <div class="col-3">
        <a href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" width="50%" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" width="50%" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" width="50%" alt="">
        </a>
      </div>
      <div class="col-3">
        <a href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" width="50%" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Information -->

<!-- Start Media Partner -->
<div class="container-fluid text-center bg-light">
  <h4 class="py-3">Media Partner</h4>
  <h6 class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</h6>
  <div class="row">
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
    <div class="col-3 mb-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="" width="50%"></div>
  </div>
</div>
<!-- End Media Partner -->

@endsection()