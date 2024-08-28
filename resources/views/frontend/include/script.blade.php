<!-- Navbar Dropdown -->
<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="{{ asset('public/frontend/js/sina-nav.js') }}"></script>


   <script src="{{ asset('public/frontend/js/jquery-2.2.4.min.js') }}"></script>

   <!-- Navbar JavaScript -->
   <script src="{{ asset('public/frontend/js/superfish.min.js') }}"></script>
   <script src="{{ asset('public/frontend/js/hoverIntent.js') }}"></script>
   <script src="{{ asset('public/frontend/js/sticky.js') }}"></script>

   <!-- Header JavaScript -->
   <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
   <script src="{{ asset('public/frontend/js/morphext.min.js') }}"></script>

   <!-- Testimonial JavaScript -->
   <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>

   <!-- Optional JavaScript -->
   <script src="{{ asset('public/frontend/js/main.js') }}"></script>

   <!-- Siteseal JavaScript -->
   <span id="siteseal" class="SealGodday"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=DegaUWFIQGs6zdTNskKC84Xr9fkSh3vNSyVM8alzoLDekV77GyPm8ffcpGZR"></script></span>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>

   <!-- Files included for lightbox askforprice-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="{{ asset('public/frontend/js/ask-price.js') }}"></script>
   <script>
   $(document).ready(function(){
       //Examples of how to assign the Colorbox event to elements

       $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
       $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
       $(".inline").colorbox({inline:true, width:"50%"});
       $(".callbacks").colorbox({
           onOpen:function(){ alert('onOpen: colorbox is about to open'); },
           onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
           onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
           onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
           onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
       });

       $('.non-retina').colorbox({rel:'group5', transition:'none'})
       $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

       //Example of preserving a JavaScript event for inline calls.
       $("#click").click(function(){
           $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
           return false;
       });
   });
   </script>
   <!-- Files included for lightbox askforprice-->
       <!-- Include Below JS After Your jQuery.min File -->

 <!--Main Menu File-->

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


   <!-- ./subscribe Modal -->	<script type="text/javascript">
   $(window).on('load', function() {
    setTimeout(function(){
      $('#subscribeModal').modal('show');
  }, 5000);

       setTimeout(function(){
      $('#subscribeModal').modal('hide');
  }, 12000);


});
$('#Reloadpage').click(function() {
   location.reload();
});
</script>


@stack('add-js')






<script src="https://121chatagent.com/136708096"></script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5cc2e3522b7f3e001277cb95&product=inline-share-buttons"></script>
