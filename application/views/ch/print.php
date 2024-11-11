<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
body{
background-color: black !important;
color: white !important;
}

p{
    text-align: start;
    color: white;
}
.photos-list ul,
  .videos-list ul {
    margin: 0px;
    padding: 0px;
  }
  
  .photos-list ul li,
  .videos-list ul li {
    list-style: none;
    float: left;
    width: 18%;
    margin-left: 25px;
    margin-top:10px;
    position: relative;
  }
  .photos-list ul li p{
    margin-left: 25px;
  }
  .photos-list ul li img,
  .videos-list ul li img {
    float: left;
    height: 155px;
    width: 100%;
    margin-left: 25px;
    position: relative;
    border-radius: 10px;
  }
  
  .photos-list ul li span,
  .videos-list ul li span {
    position: absolute;
    bottom: 0;
    right: 0;
    background: rgba(0, 0, 0, .5);
    padding: 5px 10px;
    cursor: pointer;
  }
  
  .photos-list ul li span svg,
  .videos-list ul li span svg {
    color: #fff;
  }
  
  .hidden {
    display: none;
  }
  
</style>




<section id="work" style="padding:0px !important; ">
    <div class="container ">
      <div class="al">
        <h6></h6>
        <h1 style="font-size: 70px;">PRINT</h1>
        <div class="row d-flex justify-content-center">
            <img id="main_cover"src="assets/img/Work/ch/Printb.jpg" style="max-width: 70%;" alt="">
            
        </div>
      </div>
    </div>
    
  </section>
<section id="" style="padding:60px 0px !important; ">
    <div class="container text-end">
    <div class=" row">
            <div class="col-6">
                <p style="color: #fff;padding-top: 9px;">More Work</p>
            </div>
            <div class="row col-6 text-end">
                <div class="col-8">
                    <p style="text-align:end ; color: #fff;padding-top: 9px;"> View All</p>
                </div>
                <div class="col-1 text-start">
                    <button type="button" id="loadAllImages" style="background-color: black;border: none !important;">
                        <img src="assets/img/service/more.png" width="40" height="40" alt=""></i></button>
                </div>
            </div>

        </div>
    </div>
   
  </section>
<section id="work" style="padding:0px 0px 30px 0px !important; ">
    <div class="container text-center">
      <div class="al thumbnails photos-list text-center ">
        <div class=" ">
          <ul>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/ch_Standee.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/Dangler_Mockup.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/Envelope.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/Gate_Mockup_CH.jpg" /></li>
            
            <li class="hidden"> <img src="assets/img/Work/ch/Print/LUT_Company_Profile_003.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/Standee.jpeg" /></li>
            <li class="hidden"> <img src="assets/img/Work/ch/Print/Tent_Card.jpg" /></li>

          </ul>
          
            
            
        </div>
      </div>
    </div>

  </section>
  <script>
 $(document).ready(function() {
    const maxLoad = 7
  
    function showEl(el) {
      return el.removeClass('hidden')
    }
  
    $('li').each(function(index) {
      index < maxLoad ?
        showEl($(this)) : null
    })
  
    $('#loadAllImages').click(function() {
      $('li').each(function() {
        showEl($(this))
      })
    })
  });


// for slider

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

  </script>
 
 

