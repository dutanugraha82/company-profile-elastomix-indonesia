@extends('master')
@section('title')
    <title>Elastomix | Contact</title>
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <i class="fa fa-phone-square fa-6x"></i>
                <h3 class="text-primary mt-3">(0267) 8638112</h3>
            </div>

            <div class="col-md text-center mt-4 mt-md-0">
                <i class="fa fa-envelope fa-6x" aria-hidden="true"></i>
                <h3 class="text-primary mt-3">elastomix@gmail.com</h3> {{-- this email is an example --}}
            </div>

            <div class="col-md text-center mt-4 mt-md-0">
                <i class="fa fa-map-marker fa-6x" aria-hidden="true"></i>
                <a href="https://goo.gl/maps/atjTL1oqUfT4Eqa76">
                    <p class="text-primary mt-3">Jl. Mitra Selatan III Blok H8, Parungmulya, Kec. Ciampel, Kabupaten Karawang, Jawa Barat 41363</p>
                </a>
            </div>
        </div>
    </div>
@endsection