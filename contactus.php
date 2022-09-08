<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contactus</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">My Event Planner.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      
      <a href="login.php">login</a>
      <a href="contactus.php">Contact Us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/common.jpg) no-repeat">
   <h1>Contact us</h1>
</div>

<!-- booking section starts  -->

<section class="contact">

   <form action="contactus_form.php" method="post" class="contact-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
        
         <div class="inputBox">
            <span>message :</span>
            <input type="text" name="message">
         </div>

         

      </div>

      <input type="submit" value="send" class="btn" name="send">

   </form>

   



 

</section>





<!-- booking section ends -->

















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