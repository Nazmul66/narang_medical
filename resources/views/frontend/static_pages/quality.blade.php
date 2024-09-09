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
            <h1>Quality Certificates</h1>
            <div class="breadcrumbs_path">
            <a href="index.php">Home</a>
            Quality Certificates
            </div>
        </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-40">
  	<div class="container">

        <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">NARANG MEDICAL LIMITED - 'Where quality is a culture'</h3>
          <p class="section-description">Quality isn't something that can be argued into an article or promised into it. It must be put there. If it isn't put there, the finest sales talk in the world won't act as a substitute. <em>- C.G.Campbell</em></p>
          <hr class="bottom-line">
        </div>
      </div>

        <div class="row pt-40">

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/1-USFDA-India-510k.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/1-fda-510k-thumbnail.jpg') }}" alt="USFDA 510(k)">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/1-USFDA-India-510k.pdf"  target="_blank">USFDA 510(k)</a></strong></figcaption>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/4-9001.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/4-iso-thumbnail.jpg') }}" alt="ISO 9001:2015 CERTIFICATE">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/4-9001.pdf"  target="_blank">ISO 9001:2015 CERTIFICATE</a></strong></figcaption>
			</div>


			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/5-13485.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/4-iso-thumbnail.jpg') }}" alt="ISO 13485 :2016 CERTIFICATE">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/5-13485.pdf" target="_blank">ISO 13485 :2016 CERTIFICATE</a></strong></figcaption>
			</div>


			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/6-IQNET-9001.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/6-IQNET.jpg') }}" alt="IQNET ISO 9001:2015  CERTIFICATE">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/6-IQNET-9001.pdf" target="_blank">IQNET ISO 9001:2015  CERTIFICATE</a></strong></figcaption>
			</div>


			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/7-IQNET-13485.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/6-IQNET.jpg') }}" alt="IQNET ISO 13485 :2016 CERTIFICATE">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/7-IQNET-13485.pdf" target="_blank">IQNET ISO 13485 :2016 CERTIFICATE</a></strong></figcaption>
			</div>



            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/1-Free-Sale-Certificate-DGFT-NML-Oct2022-2024.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/9-dgft.jpg') }}" alt="FREE SALE CERTIFICATE (DGFT)">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/1-Free-Sale-Certificate-DGFT-NML-Oct2022-2024.pdf" target="_blank">FREE SALE CERTIFICATE (DGFT) (2022-2024)</a></strong></figcaption>
			</div>


            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/2-Free-Sale-Certificate-DGFT-NML-Jan2023-2025.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/9-dgft.jpg') }}" alt="FREE SALE CERTIFICATE (DGFT)">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/2-Free-Sale-Certificate-DGFT-NML-Jan2023-2025.pdf" target="_blank">FREE SALE CERTIFICATE (DGFT) (2023-2025)</a></strong></figcaption>
			</div>


             <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/FDA-CDSCO-Free-Sale-Certificate-1.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/FDA-CDSCO-Free-Sale-Certificate-1.jpg') }}" alt="FDA CDSCO Free Sale Certificate">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/FDA-CDSCO-Free-Sale-Certificate-1.pdf" target="_blank">FDA CDSCO Free Sale Certificate</a></strong></figcaption>
			</div>


            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/CDSCO-MD-9-mfg-License-1.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/CDSCO-MD-9-mfg-License-1.jpg') }}" alt="CDSCO MD-9 mfg License">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/CDSCO-MD-9-mfg-License-1.pdf" target="_blank">CDSCO MD-9 MFG License</a></strong></figcaption>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/ce.php">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/ce-certificate-non-implant.jpg') }}" alt="CE CERTIFICATE NON IMPLANT">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/ce.php">CE CERTIFICATE NON IMPLANT</a></strong></figcaption>
			</div>


			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/16-NML-Certificate-of-Incorporation.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/21-star-export-certificate-thumbnail.jpg') }}" alt="CERTIFICATE OF INCORPORATION">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/16-NML-Certificate-of-Incorporation.pdf" target="_blank">CERTIFICATE OF INCORPORATION</a></strong></figcaption>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/24-bn19492-narang-medical-ltd-ems.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/24-bscic.jpg') }}" alt="BSCIC Certifications">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/24-bn19492-narang-medical-ltd-ems.pdf" target="_blank">BSCIC Certifications ISO 14001:2015</a></strong></figcaption>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/25-bn19492-narang-medical-ltd-ohsms.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/24-bscic.jpg') }}" alt="BSCIC Certifications">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/25-bn19492-narang-medical-ltd-ohsms.pdf" target="_blank">BSCIC Certifications ISO 45001:2018</a></strong></figcaption>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/26-bu1614-narang-medical-ltd-coc.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset('public/frontend/certificates/images/24-bscic.jpg') }}" alt="BSCIC Certifications">
			</a>
			<figcaption class="mt-3"><strong><a href="certificates/images/26-bu1614-narang-medical-ltd-coc.pdf" target="_blank">BSCIC Certifications</a></strong></figcaption>
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
