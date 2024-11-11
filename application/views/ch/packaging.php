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
   cursor: pointer;
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




<section id="work" style="padding:20px 0px !important; ">
    <div class="container ">
      <div class="al">
        <h6></h6>
        <h1 style="font-size: 70px;">PACKAGING</h1>
        <div class="row d-flex justify-content-start"style="padding:60px 0px !important; ">
            <img src="assets/img/Work/ch/packing.jpg" style="max-width: 90%;" alt="">
            
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
 
 

