<!DOCTYPE html>
<html>

<head>
  <title>User</title>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       <style>
        /* Optional: Add your custom styles here */
        body {
            background-color: 	linen;
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
          }

        #TrackNo {
            width: 250px; /* Adjust the width as needed */
        }

        #trackButton {
            margin-top: 10px; /* Adjust the margin as needed */
        }

        #footer {
            text-align: center;
            padding: 10px;
            background-color: #584e46; /* Adjust the background color as needed */
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* slideshow */
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 500px;
          position: relative;
          margin: auto;
          height: 250px;
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
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }

        .mySlides img {
          width: 100%;
          height: 250px; /* Set the height to match the container height */
          object-fit: cover; /* Ensure the image covers the entire container */
        }


        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
    </style>
  </head>
</head>
<body>
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>
        <!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./assets/images/info3.jpg" style="width:100%">
  <div class="text">How to find Tracking Number</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./assets/images/info1.jpg" style="width:100%">
  <div class="text">Memo</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./assets/images/info2.jpg" style="width:100%">
  <div class="text">Price</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->

<div id="main-content" class="container allContent-section py-4">
    <h1>WELCOME TO CELLARIUM CENTRE</h1>
    <P>Track your parcel here.</p>
    <input type="text" id="TrackNo" class="form-control" maxlength="50">
    <input type="button" value="TRACK" class="btn btn-primary" onclick="inputTrack()" id="trackButton">
    <p>
        Sample: <a href="#"onclick="javascript:document.getElementById('TrackNo').value=this.innerText;return false;">ERC804027102MY</a>
    </p>
    <img src="./assets/images/info3.jpg" alt="Trulli" width="500" height="333"> <br>
    <img src="./assets/images/CCSA.jpg" alt="Trulli" width="500" height="100">
    </div>     
    

    <div id="footer">
        <p>&copy; 2023 Cellarium Centre. All rights reserved.</p>
    </div>   


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
<script src="//www.tracking.my/track-button.js"></script>
<script>
  function inputTrack() {
    var num = document.getElementById("TrackNo").value;
    if(num===""){
      alert("Please enter tracking number");
      return;
    }
    TrackButton.track({
      tracking_no: num
    });
  }

  //slideshow
  let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</html>