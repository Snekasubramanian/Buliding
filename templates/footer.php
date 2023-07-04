<!-- footer start -->
<div class="fot_img ">
     <div class="bk_li">
        <div class="w-90 pt-3 ">
              <div class="row text-center">
                  <a href="index.php"> <img src="./assets/img/footlogo.png" alt=""></a> 
                   <p class="mb-0">Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.</p>
                    <ul style="list-style-type:none" class="footer_lin d-flex justify-content-center">
                      <li>  <a href="index.php">Home </a></li>
                      <li> <a href="about.php">About US </a></li>
                      <li> <a href="product.php">Products</a></li>
                     
                      <li> <a href="contact.php">Contact US </a></li>
                   </ul>
                    <p >2022 ALL RIGHTS REVERED BY <a href="http://www.ninositsolution.com/"class="text-white">
                        NINOSITSOLUTION </a></p> 
                 </div>
         
            </div>
        </div>
     </div>
<!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
        
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
    </script>
        <script>AOS.init();</script>
   <script>
     $('.home_owl').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            
            1000:{
                items:3
            }
        }    
    })
   </script>
   <script>
     $('.abt_car').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            
            1000:{
                items:1
            }
        }    
    })
   </script>  
  
    <script>
                   $(window).scroll(function(){
            if($(this).scrollTop() > 100){
                $('.nav-menu').addClass('sticky')
            } else{
                $('.nav-menu').removeClass('sticky')
            }
        });
    </script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</html>