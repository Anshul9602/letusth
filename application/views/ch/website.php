

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




<section id="work" style="padding:20px 0px !important; ">
    <div class="container ">
      <div class="al">
        <h6></h6>
        <h1 style="font-size: 70px;">WEBSITE</h1>
        <div class="row d-flex justify-content-start"style="padding:60px 0px !important; ">
            <img id="main_cover"src="assets/img/Work/ch/web/Website.jpg" style="max-width: 90%;" alt="">
            
        </div>
      </div>
    </div>
    
  </section>
<section id="" style="padding:10px 0px !important; ">
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
          

           <!-- <div class=" col-lg-4"><img src="assets/img/Work/ch/Labelling.jpg" alt=""><p>Labelling</p></div>
           <div class=" col-lg-4"><img src="assets/img/Work/ch/4.jpg" alt=""><p>Love Mug Mockup</p></div>
           <div class=" col-lg-4"><img src="assets/img/Work/ch/5.jpg" alt=""><p>Mr & Mrs Mug_Golden Text_Mug_Mockup</p></div> -->
            <li class="hidden"><img src="assets/img/Work/ch/web/Image-1.png" alt=""></li>
            <li class="hidden"><img src="assets/img/Work/ch/web/Image-2.png" alt=""></li>
            <li class="hidden"><img src="assets/img/Work/ch/web/Image-3.png" alt=""></li>
            <li class="hidden"> <img src="assets/img/Work/ch/web/Image-4.png" alt=""></li>
            <li class="hidden"> <img src="assets/img/Work/ch/web/Image.png" alt=""></li>
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

  </script>
 
 


