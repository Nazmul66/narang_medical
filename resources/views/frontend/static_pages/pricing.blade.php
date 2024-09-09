

@extends('frontend.layout.template')

@push('meta-title')
    Medical Equipment | Hospital Supplies | Hospital Medical Supplies | Manufacturer | Suppliers | Surgical Instruments | Narang Medical Limited | India
@endpush

@push('add-css')

@endpush


@section('body-content')

  <!--==========================
  Breadcrumb Section
  ============================-->
  <div class="breadcrumb-image" style="background-image: url({{ asset('public/frontend/images/banner/product.jpg') }});">
    <div class="container text-left">
        <h1>Pricing</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
          Pricing
        </div>
    </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-80">
    <div class="container">

    	<div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Free Quote</h3>
          <p class="section-description">Help us to offer you our best quote for your requirement! Our pricing depends on quantity of products, shipping destination and freight.</p>
          <hr class="bottom-line">
        </div>
      </div>

      <div class="row">
      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
            <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-1.png') }}" alt="Step 1 - Select Products">
            <div class="card-body">
                <h5 class="quote-heading">Select Products</h5>
            </div>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
            <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-2.png') }}" alt="Step 2 - Mention Quantiy (More Quantity = More Discount)">
            <div class="card-body">
                <h5 class="quote-heading">Mention Quantiy (More Quantity = More Discount)</h5>
            </div>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
            <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-3.png') }}" alt="Step 3 - Inform Delivery Address">
            <div class="card-body">
                <h5 class="quote-heading">Inform Delivery Address</h5>
            </div>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
             <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-4.png') }}" alt="Step 4 - Get Customized CNF Quote">
            <div class="card-body">
                <h5 class="quote-heading">Get Customized CNF Quote</h5>
            </div>
        </div>
      </div>


      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
            <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-5.png') }}" alt="Step 5 - Make Payment">
            <div class="card-body">
                <h5 class="quote-heading">Make Payment</h5>
            </div>
        </div>
      </div>



      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
           <img class="card-img-top img-fluid" src="{{ asset('public/frontend/images/step-6.png') }}" alt="Step 6 - Receive Goods">
            <div class="card-body">
                <h5 class="quote-heading">Receive Goods</h5>
            </div>
        </div>
      </div>
    </div>

      <div class="row">
      	<div class="col-md-12 mt-5" align="center">
        <a href="purchase-enquiry-form.php" class="btn-narang-outline" style="margin: 0px auto;">Request Quote</a>
        </div>
      </div>

    </div>
  </section>

<!--==========================
Testimonial Section
============================-->
@include('frontend.include.testimonial')

<!--==========================
Events Section
============================-->
   @include('frontend.include.event_section')

@endsection


@push('add-js')

@endpush
