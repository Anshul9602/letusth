<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .show {
      display: block !important;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      color: red !important;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>

  <!-- popup form -->

  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 8;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      margin: 50px auto;
      border: 1px solid #999;
      width: 60%;
    }

    h2,
    p {
      margin: 0 0 20px;
      font-weight: 400;
      color: #747474;
    }

    span {
      color: #666;
      display: block;
      padding: 0 0 5px;
    }

    form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5;
      background: #eee;
    }

    input,
    textarea {
      width: 90%;
      padding: 10px;
      margin-bottom: 2px;
      border: 1px solid #1c87c9;
      outline: none;
    }

    .contact-form button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9;
      font-size: 16px;
      font-weight: 400;
      color: #fff;
    }

    button:hover {
      background: #2371a0;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    button.button {
      background: none;
      border-top: none;
      outline: none;
      border-right: none;
      border-left: none;
      border-bottom: #02274a 1px solid;
      padding: 0 0 3px 0;
      font-size: 16px;
      cursor: pointer;
    }

    button.button:hover {
      border-bottom: #a99567 1px solid;
      color: #a99567;
    }

    .hs {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 20px;
      padding-bottom: 20px;
      position: relative;
      color: #37517e;
    }



    .dropbtn {

      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: none !important;
      font-size: 15px;
      font-weight: 500;
      color: black;
      white-space: nowrap;
      transition: 0.3s;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      color: rgb(231, 18, 18);
    }
 
 button img:active {
  background-color: red;
  transition-duration:.5s;
  transform: translateY(12px);
}
    .photos-list ul li img:hover {
      opacity: 9999;
   -ms-transform: scale(2); /* IE 9 */
  -webkit-transform: scale(3); /* Safari 3-8 */
  transform: scale(1.1); 
  transition-duration:3s;
}
.ir{
  border-radius: 10px;
}

  </style>
  <!-- <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      var a = document.getElementById("myDropdown").classList.toggle("show");
      console.log(a);
    }
  
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
          console.log(i);
        }
        
      }
    }

 
    </script> -->
   
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex hg" onload="myFunction()">
    <div class="container d-flex align-items-center">

      <a class="logo me-auto" href="<?php echo base_url(''); ?>"><img class="lg" src="assets/img/logo.png" /></a>


      <nav id="navbar" class="navbar text-center">
        <ul>

          <li><a class="nav-link scrollto clients" href="<?php echo base_url('Clients'); ?>" style="color: white;">Clients</a></li>
          <li><a class="nav-link scrollto service" href="<?php echo base_url('Service'); ?>" style="color: white;">Service</a></li>
          <li><a class="nav-link scrollto office" href="<?php echo base_url('Connect'); ?>" style="color: white;">Connect</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    </div>
  </header><!-- End Header -->
