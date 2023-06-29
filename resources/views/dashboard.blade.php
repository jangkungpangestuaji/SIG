@extends('main.main')

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
@endsection()