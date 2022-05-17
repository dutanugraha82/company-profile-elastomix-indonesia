@extends('master')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-shadow">
      <h1 class="display-4">Elastomix Indonesia</h1>
    </div>
  </div>

  <div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-center" style="color: white;font-size:20px">
          About Company
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <h4><b>Elastomix</b></h4>
            <br>
            <p style="text-indent: 30px"> Elastomix is a rubber compounding factory for the manufacture of carbon master-batches (CMB). The plant has a production capacity of 9,000 tonnes per year with one Banbury No. mixer. 9</p>
            <p>
                Established : April 2013 (Initial Meeting) <br>
                Expected to begin : April 2014 <br>
                Shareholders : PT. Prospect Motor (25%) , Elastomix Co., Ltd. (75%)<br>
                Address : Jl. Mitra Selatan III Blok H8, Parungmulya, Kec. Ciampel, Kabupaten Karawang, Jawa Barat 41363

            </p>
          </blockquote>
        </div>
      </div>

      <div class="card mt-4 shadow-lg">
        <div class="card-header bg-primary text-center" style="color: white;font-size:20px">
          Domestic and global network
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p style="text-indent: 30px">With the expansion of overseas markets, we are also progressing beyond national boundaries by establishing production sites overseas in order to deliver our high-quality products to customers everywhere.</p>
          </blockquote>
          <h4 class="text-center">Japan</h4>
          <p class="text-center">
              Yokkaichi Plant <br>
              Tokyo Plant <br>
              Shiba Plant
          </p>
          <br>

          <h4 class="text-center">Thailand</h4>
          <p class="text-center">
            Elastomix (Thailand) Co., Ltd.
          </p> 
          <br>

          <h4 class="text-center">China</h4>
          <p class="text-center">
            Elastomix (Foshan) Co., Ltd. <br>
				Tianjin Kuocheng Rubber Industry Co., Ltd.
          </p>
          <br>

          <h4 class="text-center">Indonesia</h4>
          <p class="text-center">
            Elastomix (Indonesia), PT.
          </p>
          <br>
          
          <h4 class="text-center">Mexico</h4>
          <p class="text-center">
            Elastomix (Mexico) S.A. de C.V.
          </p>

        </div>
      </div>

      <div class="card shadow-lg mt-4">
        <div class="card-header bg-primary text-center" style="color: white;font-size:20px">
          Production Capacity
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <h4 class="text-center">Japan</h4>
            <p class="text-center display-7">Total : 59,000 Ton/Y</p>
            <p class="text-center">
                Yokkaichi Plant | 24,000Ton/Y <br>
                Tokyo Plant | 20,000Ton/Y<br>
                Shiba Plant | 15,000Ton/Y (Color Compound Only)
            </p>

            <br>

            <h4 class="text-center">China</h4>
            <p class="text-center">
                Elastomix (Foshan) | 20,000Ton/Y <br>
                Tianjin Kuo Cheng | 15,000Ton/Y<br>
            </p>

            <br>

            <h4 class="text-center">Thailand</h4>
            <p class="text-center">
                Elastomix (Thailand) |  39,000Ton/Y
            </p>

            <br>

            <h4 class="text-center">Indonesia</h4>
            <p class="text-center">
                Elastomix Indonesia |  14,000Ton/Y
            </p>
            <br>

            <h4 class="text-center">Mexico</h4>
            <p class="text-center">
                Elastomix Mexico S.A. de C.V. |  5,000Ton/Y
            </p>
            <br>

            <h4 class="text-center">Overseas Total : 94,000Ton/Y</h4>

          </blockquote>
        </div>
      </div>
  </div>
@endsection