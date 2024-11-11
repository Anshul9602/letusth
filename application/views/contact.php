 <style>
  .contact_link{
     color: white;
      background-color: #ed1165;
  }
  @media screen and (min-width:800px)  {
    .mr{
      margin-left:25%;
      margin-right:25%;
    }
  }
    
  
 </style>
 
 <!-- ======= Contact Section ======= -->
  <section id="contact" style="background: linear-gradient(to bottom, #6172ab 10%,rgb(255,139,188) 80%);" class="contact">
    <div class="al" data-aos="fade-up">

      <div class="text-center">
        <h2 style="color:white;">Crime Control & Social Development Organisation</h2><hr>
        <h1 style="color:white;">Contact Us</h1>
        <p style="color:white;">Looking for a fast response? Get in touch with our customer support via email, or contact us directly!</p>
      </div>

      <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <div class="row">
              <div class="col-sm-6">
                
                <p><h5><span>Head Office :</span></h5> 21/41-42 2nd Floor<br> Kalyan Puri, Delhi -110091</p>
              </div>
              <div class="col-sm-6">
                 <h5><span>Centre :</span></h5> 1st Floor 113 Kishan Kunj <br>Ex. Laxmi Nagar -Delhi- 110092</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 ">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543d3a323b14312c35392438317a373b39">info@thecrimecontrol.com</a></p>
          
            
            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543d3a323b14312c35392438317a373b39">support@thecrimecontrol.com</a></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+918287372178 , +919958585777</p><br>
             <h3>Website</h3>
             <a href="url"> www.thecrimecontrol.in</a>
          </div>
        </div>

      </div> -->

      <div class="col-md-12  d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        

        <div class="mr col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->
  <script>
    $(document).ready(function() {
      $('.contact_link').addClass(" active");
    })
  </script>
