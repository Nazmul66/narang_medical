<header id="header">

    <!-- Mobile Header -->
    <div class="wsmobileheader clearfix ">
      <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
      <span class="smllogo"><img src="{{ asset('public/frontend/images/net-logo-small.png') }}" width="190" height="16"  alt="Trust NET brand for quality Medical Equipment, Hospital Supplies and Surgical Instruments"></span>

    </div>
    <!-- Mobile Header -->



    <div class="wsmainfull clearfix">
      <div class="wsmainwp clearfix">


        <div class="desktoplogo"><a href="/index.php"><img src="{{ asset('public/frontend/images/net-logo.png') }}" alt="Narang Medical Ltd. is manufacturer &amp; suppliers of Medical Equipment, Hospital Supplies and Hospital Medical Supplies."></a></div>
        <!--Main Menu HTML Code-->
        <nav class="wsmenu clearfix">
          <ul class="wsmenu-list">
            <li aria-haspopup="true" class="rightmenu" style="background:#FFFFFF;">
              <div class="gcse-searchbox-only"></div>


            </li>
            <li aria-haspopup="true"><a href="{{ route('home') }}" class="menuhomeicon"><i class="fas fa-home"></i><span class="hometext">
              HOME</span></a></li>
           <li><a href="{{ route('abouts') }}" class="menuhomeicon">ABOUT</a></li>

            <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span><a href="/products.php">PRODUCTS <span class="wsarrow"></span></a>
              <div class="wsmegamenu clearfix">
                <div class="container-fluid">
                  <div class="row">

                      @foreach ($productCategories as $productCategory)
                          <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                              <li><a href="{{ route('product.details', $productCategory->slug) }}">{{ $productCategory->title }}</a></li>
                          </ul>
                      @endforeach


                    {{-- <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                      <li><a href="/hospital-medical-furniture/index.php">Hospital Medical Furniture</a></li>
                      <li><a href="/orthopedic-implants-manufacturers-india/index.php">Orthopaedic Implants</a></li>
                      <li><a href="/medical-disposables/index.php">Medical Disposables</a></li>
                      <li><a href="/diagnostic-equipments-products/index.php">Diagnostic Equipments</a></li>
                      <li><a href="/anaesthesia-equipments-products/index.php">Anaesthesia Products</a></li>
                      <li><a href="/autoclave-sterilizers/index.php">Autoclave &amp; Sterilizers</a></li>
                      <li><a href="/laboratory-products/index.php">Laboratory Products</a></li>
                    </ul> --}}


                    {{-- <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                      <li><a href="/height-weight-scales/index.php">Height &amp; Weight Scales</a></li>
                      <li><a href="/ob-gyn-gynecological-products/index.php">OB GYN Products</a></li>
                      <li><a href="/operation-theatre-lights/index.php">OT &amp; Examination lights</a></li>
                      <li><a href="/suction-machines-units/index.php">Suction Machines &amp; Units</a></li>
                      <li><a href="/medical-rubber-products/index.php">Medical Rubber Products</a></li>
                      <li><a href="/hospital-holloware/index.php">Hospital Holloware</a></li>
                      <li><a href="/infant-care-baby-care-equipments/index.php">Infant Care Equipments</a></li>
                    </ul>

                    <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                      <li><a href="/laryngoscope-set-spares/index.php">Laryngoscope Set &amp; Spares</a></li>
                      <li><a href="/cold-chain-equipments/index.php">Cold Chain Equipments</a></li>
                      <li><a href="/emergency-medical-products-supplies/index.php">Emergency Products</a></li>
                      <li><a href="/misc-surgical-medical-products/index.php">Misc. Surgical Medical Products</a></li>
                      <li><a href="/hospital-scrubs-linens-manufacturers/index.php">Hospital Scrubs &amp; Linens</a></li>
                      <li><a href="/operation-theatre-tables/index.php">OT Tables</a></li>
                      <li><a href="/rehabilitation-products-aids/index.php">Rehabilitation Products &amp; Aids</a></li>
                    </ul>

                    <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                      <!--<li><a href="/physiotherapy-equipments/index.php">Physiotherapy Equipments</a></li> -->
                      <li><a href="/dental-equipments-products/index.php">Dental Equipments</a></li>
                      <li><a href="/blood-collection-tubes/index.php">Blood Collection Tubes</a></li>
                      <li><a href="/medical-imaging/index.php">Medical Imaging</a></li>
                      <li><a href="/icu-equipments/index.php">ICU Equipment</a></li>
                      <li><a href="/ot-equipments/index.php">OT Equipment</a></li>
                      <li><a href="/emergency-medical-products-supplies/covid-19/index.php">Covid - 19 Products</a></li>
                    </ul> --}}
                  </div>
                </div>
              </div>
            </li>

            <li><a href="{{ route('quality') }}" class="menuhomeicon">QUALITY</a></li>
            <li><a href="{{ route('price') }}" class="menuhomeicon">PRICING</a></li>


            <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span><a href="#">CONTACT <span class="wsarrow"></span></a>
              <ul class="sub-menu">
                <li aria-haspopup="true"><a href="{{ route('distributor') }}">Become Our Distributor </a></li>
                <li aria-haspopup="true"><a href="{{ route('purchase.enquiry') }}">Purchase Enquiry</a></li>
                <li aria-haspopup="true"><a href="{{ route('address') }}">Our Address</a></li>
                <li aria-haspopup="true"><a href="{{ route('feedback') }}">Feedback</a></li>
              </ul>
            </li>


          </ul>
        </nav>
        <!--Menu HTML Code-->
      </div>
    </div>

  </header>
