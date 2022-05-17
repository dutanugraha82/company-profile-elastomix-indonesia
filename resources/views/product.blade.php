@extends('master')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endpush
@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container text-shadow">
      <h1 class="display-4">Our Product</h1>
    </div>
  </div>

    <div class="container mt-firstContent">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-center" style="color: white;font-size:20px">
              Product Overview
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    Product : Carbon Master Batch <br>
                    - Automobile parts (90%) = weather strips, anti-vibration materials, grommet, hose, packing, seals, O-ring, air-cleaner, foot-step, grips, pads, etc.
                    <br>
                    <br>
                    - Others (10%) = drain hose, belt, capacitor/condenser packing, paper roller, cushion/mats, etc. 
                    <br>
                    <br>
                    - Polymer base : <br>
                    <img src="{{ asset('assets/img/product1.png') }}" alt="">
                </p>
              </blockquote>
            </div>
          </div>
    </div>

    <div class="container mt-secondContent">
        <h2 class="text-center text-primary">Master Batch Product Deployment</h2>
        <ul class="nav nav-pills mb-3 justify-content-center mt-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Automobile</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Others</a>
            </li>
          </ul>

          {{-- Automobile content start --}}
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <img src="{{ asset('assets/img/product-automotive.jpg') }}" class="d-block w-100">

            </div>
             {{-- Automobile content end --}}

              {{-- Others content start --}}
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('assets/img/other.jpg') }}" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/other2.jpg') }}" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/other3.jpg') }}" class="d-block w-100">
                      </div>
                    </div>
                   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </button>
                  </div>
            </div>
          </div>
           {{-- Others content end --}}
    </div>
@endsection