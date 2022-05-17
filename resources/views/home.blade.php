@extends('master')
@section('title')
    <title>Elastomix | Home</title>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush

@section('content')
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-white text-shadow">
      <h1 class="display-4">Elastomix Indonesia</h1>
      <p class="lead">Welcome to our website company!</p>
    </div>
  </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/home1.jpeg') }}" class="d-flex w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-shadow ctext">
            <h2 class="display-4">Best Compound Rubber Composition</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/home2.jpeg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-shadow ctext">
            <h2 class="display-4">Best Technology Of Compound Rubber</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/home3.png') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-shadow ctext">
            <h2 class="display-4">Rubber Compound Manufacturer</h2>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>

    <div class="container">
      <h4 class="text-md-center text-left ml-3" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        The Elastomix company is the best rubber manufacturer in Indonesia. <br> With advanced technology, as well as innovations that continue to grow and advance from time to time.
      </h4>
    </div>
@endsection