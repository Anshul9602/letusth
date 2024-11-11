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




<section id="work" style="padding:10px 0px !important; ">
    <div class="container ">
      <div class="al">
        <h6></h6>
        
        <div class="row d-flex justify-content-center">
           

  <div class="container_fluid" >
    <div id="" class="swiper mySwiper d-flex justify-content-center">
      <div class="swiper-wrapper ">
        <div class="swiper-slide" >
          <img src="assets/img/Work/Delta/print/1.png" alt="" style="max-width: 100%;">
        </div>
        <div class="swiper-slide">
          <img src="assets/img/Work/Delta/print/2.png" alt="" style="max-width: 100%;">
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
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
 
 

