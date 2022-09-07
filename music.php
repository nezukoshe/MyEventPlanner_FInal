
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



   <style>
* {
  box-sizing: border-box;
}

#ABC {
      background-color: #fff;

    }






.column {
 float:left;

  width: 37rem;
  height: 45rem;
  padding: 10px;
  
}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}

.row2::after {
  content: "";
  clear: both;
  display: table;
}



.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #fff; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}


</style>

</head>
<body>




   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">My Event Planner.</a>

   <nav class="navbar">
      <a href="home.php">Back</a>
      
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->


<div class="heading" style="background:url(images/inn3.jpg)  no-repeat" width="600" height="300">
   <h1>Music and Band</h1>
</div>







<!-- image section start -->


<section class="footer" id="ABC">


<div class="row1">
  <div class="column">
    <img src="images/mus1.jpg"  style="width:100%">
    <div class="overlay">300 TK</div>
  </div>
  <div class="column">
    <img src="images/mus2.webp"  style="width:100%">
    <div class="overlay">250 TK</div>
  </div>
  <div class="column">
    <img src="images/mus3.jfif"  style="width:100%">
    <div class="overlay">250 TK</div>
  </div>
  <div class="column">
    <img src="images/mus4.jfif"  style="width:100% ">
    <div class="overlay">150 TK</div>
  </div>
</div>



<div class="row2">
  <div class="column">
    <img src="images/mus5.jpg"  style="width:100%">
    <div class="overlay">300 TK</div>
  </div>
  <div class="column">
    <img src="images/mus6.jpg"  style="width:100%">
    <div class="overlay">100 TK</div>
  </div>
  <div class="column">
    <img src="images/mus7.jpeg"  style="width:100%">
    <div class="overlay">100 TK</div>
  </div>
  <div class="column">
    <img src="images/mus8.jpg"  style="width:100%">
    <div class="overlay">150 TK</div>
  </div>
</div>


</section>












<!-- image section ends -->









<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
 
       <div class="box">
          <h3>quick links</h3>
          <a href="home.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>About Us</a>
          <a href="services.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>Services</a>
          <a href="gallery.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>Gallery</a>
          <a href="combo.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>Combo</a>
          <a href="reservation.php"   style="text-decoration: none"><i class="fas fa-angle-right"></i>Reservation</a>
       </div>
 
       <div class="box">
          <h3>extra links</h3>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-angle-right"></i> ask questions</a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-angle-right"></i> about us</a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-angle-right"></i> privacy policy</a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-angle-right"></i> terms of use</a>
       </div>
 
       <div class="box">
          <h3>contact info</h3>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-phone"></i> +123-456-7890 </a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-phone"></i> +111-222-3333 </a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
          <a href="#"   style="text-decoration: none"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
       </div>
 
       <div class="box">
          <h3>follow us</h3>
          <a href="#" style="text-decoration: none"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#" style="text-decoration: none"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#" style="text-decoration: none"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#" style="text-decoration: none"> <i class="fab fa-linkedin"></i> linkedin </a>
       </div>
 
    </div>
 
    <div class="credit"> created by <span>Jaasia & Oyshe</span> | all rights reserved! </div>
 
 </section>
 

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>