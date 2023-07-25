

<section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
            <div class="col-12 col-md-6 col-lg-3 grid-margin">
                <img src="images/logo.png" width="100" height="100" alt="" class="pb-2">
                <div class="pt-2">
                <p class="text-muted m-0">Ambika Row House</p>
                <p class="text-muted m-0"></p>
                </div>         
            </div>
          
            <div class="col-12 col-md-6 col-lg-3 grid-margin">
                <h5 class="pb-2">Our address</h5>
                <p class="text-muted">Ambika Row House<br>Near dindoli Talav<br> Beside krishna Heritage</p>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a href="#"><span class="mdi mdi-facebook"></span></a>
                    <a href="#"><span class="mdi mdi-twitter"></span></a>
                    <a href="#"><span class="mdi mdi-instagram"></span></a>
                    <a href="#"><span class="mdi mdi-linkedin"></span></a>
                </div>
            </div>
        </div>  
</section>
<script src="assests/js/jquery.min.js"></script>
<script src="assests/js/bootstrap5.bundle.min.js"></script>
<script src="assests/js/scripts.js"></script>
<script src="assests/vendors/jquery/jquery.min.js"></script>
  <script src="assests/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="assests/vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="assests/vendors/aos/js/aos.js"></script>
  <script src="assests/js/landingpage.js"></script>
  <script type="text/javascript"> 
        function googleTranslateElementInit() { 
            new google.translate.TranslateElement(
                {pageLanguage: 'en'}, 
                'google_translate_element'
            ); 
        } 
        document.addEventListener("DOMContentLoaded", function(){
    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {
    
      // close all inner dropdowns when parent is closed
      document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
        everydropdown.addEventListener('hidden.bs.dropdown', function () {
          // after dropdown is hidden, then find all submenus
            this.querySelectorAll('.submenu').forEach(function(everysubmenu){
              // hide every submenu as well
              everysubmenu.style.display = 'none';
            });
        })
      });
    
      document.querySelectorAll('.dropdown-menu a').forEach(function(element){
        element.addEventListener('click', function (e) {
            let nextEl = this.nextElementSibling;
            if(nextEl && nextEl.classList.contains('submenu')) {	
              // prevent opening link if link needs to open dropdown
              e.preventDefault();
              if(nextEl.style.display == 'block'){
                nextEl.style.display = 'none';
              } else {
                nextEl.style.display = 'block';
              }
    
            }
        });
      })
    }
    // end if innerWidth
    }); 
    // DOMContentLoaded  end
    </script> 
      
    <script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
        cb=googleTranslateElementInit">
    </script> 

    
</body>
</html>