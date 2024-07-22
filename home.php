<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!-- Boostrap file linked -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--slideshow start-->

 <style>
* {box-sizing: border-box}

.mySlides {display: none}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  height: 100%%;
  position: relative;
  margin: auto;
  overflow: hidden;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/11 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1.5s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3.0s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



</style>
</head>
<body style="Background-image:url(background5.jpg)">
<div class="container-fluid">
  
<!--navbar-->

	<nav style="position: fixed; top: 0; left: 0; width: 100%;  height: 100px; z-index: 1000;" class="navbar navbar-expand-sm bg-warning navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #333;">LION FIRNITURE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: #333;">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #333;">
            All Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="living room.php" ><p color=blue >Living Room</p></a></li>
    
             
            <li><a class="dropdown-item" href="bed room.php">Bed Room</a></li>

            <li><a class="dropdown-item" href="dining room.php">Dining Room</a></li>
 
            <li><a class="dropdown-item" href="office.php">Office</a></li>


            <li><a class="dropdown-item" href="kitchen.php">Kitchen</a></li>


            <li><a class="dropdown-item" href="mattressess.php">Mattressess</a></li>
 
            <li><a class="dropdown-item" href="outdoor.php">Outdoor/Teisure</a></li>

            <li><a class="dropdown-item" href="auditorium.php">Auditorium/Lobby</a></li>
  
            <li><a class="dropdown-item" href="laundry.php">Laundry</a></li>
 
            <li><a class="dropdown-item" href="children.php">Children</a></li>
 
            <li><a class="dropdown-item" href="plastic.php">Plastic</a></li>
 
            <li><a class="dropdown-item" href="#">Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php" style="color: #333;"><p style="font-family:serif ;">Gallery</p></a>
        </li>  

        <li class="nav-item">
          <a class="nav-link" href="About us.php" style="color: #333;"><p style="font-family:serif ;">AboutUs</p></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php" style="color: #333;"><p style="font-family:serif ; "></i>ContactUs</p></a>
        </li>
 
        <li class="nav-item">
          <a class="nav-link" href="register.php" style="color: #333;"><p style="font-family:serif ; ">Register</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logo.php" style="color: #333;"><p style="font-family:serif ;"><i class="fa fa-user-circle-o">&nbsp;</i>Login</p></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--end navbar-->
</div>
 <!--slideshow-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 11</div>
  <img src="images/living room 3.jpg" style="width:100%">
  <div class="text">LIVING ROOM</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 11</div>
  <img src="images/bed room 4.jpg" style="width:100%">
  <div class="text">BED ROOM</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 11</div>
  <img src="images/dining room 1.jpg" style="width:100%">
  <div class="text">DINING ROOM</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 11</div>
  <img src="images/office 1.jpg" style="width:100%">
  <div class="text">OFFICE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 11</div>
  <img src="images/kitchen 2.jpg" style="width:100%">
  <div class="text">KITHEN</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 11</div>
  <img src="images/mattressess 1.jpg" style="width:100%">
  <div class="text">MATTREESSESS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 11</div>
  <img src="images/outdoor 3.jpg" style="width:100%">
  <div class="text">OUTDOUR/TEISURE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 11</div>
  <img src="images/aouditorium 2.jpg" style="width:100%">
  <div class="text">AUDITORIUM/LOBBY</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 11</div>
  <img src="images/laundry 1.jpg" style="width:100%">
  <div class="text">LAUNDRY</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 11</div>
  <img src="images/children 4.jpg" style="width:100%">
  <div class="text">CHILDREN</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 11</div>
  <img src="images/plastic 1.jpg" style="width:100%">
  <div class="text">PLASTIC</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
  <span class="dot" onclick="currentSlide(11)"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 5 seconds
}
</script><br><br>

<!--slideshow end-->

<h2 style="text-align:center"><p style="font-size: 50pt; font-family:serif ;text-align: center; color: white;"><mark>WELCOME TO LION FURNITURE</mark></p></h2>
<br>
<div p style="background: rgba(250, 250, 250, 0.5);"> 
    <center>
    <p  style="font-size: 15pt; font-family:serif ;text-align: center; font-weight: 700; padding: 20px 20px; text-align: justify;">
      We are the Sri Lanka Largest Online Furniture Store, Where you live up to your furniture desires with the blend of world-class planned and produced furniture. Lion Furniture online store ensures that you will locate the ideal counterpart for all your furniture need.<br><br>

      Among the many leading online furniture shops in Sri Lanka, Lion furiniture which offers a wide range of home and office furnishings at competitive prices is quite popular.<br><br>
    </p>
  </center>
</div><br><br><br><br>


<div class="footer">
  <?php   include 'footer.php' ?>
</div>

</body>
</html>

