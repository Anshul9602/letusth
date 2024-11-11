<script src='https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
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
    cursor: pointer;
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
            <img id="main_cover"src="assets/img/Work/Cityvibes/Printb.jpg" style="max-width: 70%;" alt="">
            
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
      <div class=" thumbnails photos-list text-center ">
        <div class=" ">
        
          <ul>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Cityvibes_Standee.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Dangler_Mockup.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Envelope.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Gate_Mockup_CH.jpg" /></li>
            
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/LUT_Company_Profile_003.jpg" /></li>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Standee.jpeg" /></li>
            <li class="hidden"> <img src="assets/img/Work/Cityvibes/Print/Tent_Card.jpg" /></li>
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




  // slider 
  var main = new Splide( '#main-slider', {
  type       : 'fade',
  heightRatio: 0.5,
  pagination : false,
  arrows     : false,
  cover      : true,
  height: 300,
} );

var thumbnails = new Splide( '#thumbnail-slider', {
  rewind          : true,
  fixedWidth      : 104,
  fixedHeight     : 58,
  isNavigation    : true,
  gap             : 10,
  focus           : 'center',
  pagination      : false,
  cover           : true,
  dragMinThreshold: {
    mouse: 4,
    touch: 10,
  },
  breakpoints : {
    640: {
      fixedWidth  : 66,
      fixedHeight : 38,
    },
  },
} );

main.sync( thumbnails );
main.mount();
thumbnails.mount();
  </script>
 
 

