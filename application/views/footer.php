 <!-- ======= About Us Section ======= -->


  <!-- <hr> -->








  <div class="whatsapp">
    <a href="https://wa.me/+918800980394"><img src="assets/img/whats.png" style="width:40px;height:40px;" alt=""></a>
  </div>


  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Stay connected and receive latest news and updates.</p>
            <form class="newsletter-inner" id="mc-form" novalidate="true">
              <input type="email" class="news-field" id="mc-email" autocomplete="off"
                placeholder="Enter your email address" name="EMAIL">

              <button class="btn news-btn" id="mc-submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="footer-top" style="background-image: url(assets/img/footer_img.png);">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact justify-content-center">
            <img src="assets/img/logo.png" width="60%" alt=""><br><br>
            <p>
              Volnaa water quenches people's thirst and takes care of Earth's health at the same time. We use
              Recyclable and resealable steel cans and don't let Plastic waste generate.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links ">
            <h4>Useful Links</h4>
            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#our-water">Our Water</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>
              <strong>Address</strong>:<a
                href="https://www.google.com/maps/search/HOUSE+NO+2253%2FB-7,+KH+NO.+652%2F290,+Central+Delhi,+Delhi,+110008/@28.607229,77.22915,12z/data=!3m1!4b1">HOUSE
                NO 2253/B-7, KH NO. 652/290, Central Delhi, Delhi, 110008</a> <br><br>
              <strong>Phone:</strong> +91 85279 88345<br><br>
              <strong>Email:</strong> Volnaawater@gmail.com<br>
            </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-links text-center">
            <h4 class="section-title">Our Social Networks</h4>

            <div class="social-links mt-3 ">

              <a href="https://www.facebook.com/Volnaa-Water-100944325681402/" style="background:#02629c;"
                class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/volnaaofficial/" style="background: #02629c;" class="instagram"><i
                  class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCyDg0RDabPKCl5kJb5BISNA" style="background-color: #ff0000;"
                class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="row">
        <div class="col-12">
          <div class="copyright-text text-center">
            <p style="font-size: 14px;">Website By <a href="https://theodin.in/">The Odin</a>. Volaqua © 2022</p>
          </div>
        </div>
      </div>

    </div>
  </footer>End Footer -->

  
<div id=""></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 3000,
      },
    });

    $(document).ready(function () {

      // src update 
      $('.thumbnails li img').click(function(){
   $("#main_cover").attr('src',$(this).attr("src"));
  })

      $(".video-player").trigger('play');
      console.log("hello");
    });
  </script>


</body>

</html>