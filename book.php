<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
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
      <a href="book.php">book</a>
      <a href="login.php">login</a>
      <a href="contactus.php">Contact Us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/common.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Book your Event</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Event Date :</span>
            <input type="date" id="date_picker" name="dateofevent">
            <script language="javascript">

            // var disabledDays = ["2022-08-31", "2022-09-02"];
            // function disableAllTheseDays(date) {
            // var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
            // for (i = 0; i < disabledDays.length; i++) {
            // if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1) {
            //      return [false];
            //    }
            // }
            // return [true];
            // }
               //alert("Hello! I am an alert box!!");
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');

            var ddi = parseInt(dd)
            ddi += 1;
            dd = ddi.toString();

            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            $('#date_picker').attr('min', today);
            </script>
            
         </div>

         <div class="inputBox">
            <span>Event Time :</span>
            <select placeholder="event time" name="timeofevent">
               <option value="Lunch">Lunch</option>
               <option value="Dinner">Dinner</option>
               <option value="Afternoon">Afternoon</option>
            </select>
         </div>

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
            <span>Event Type :</span>
            <select placeholder="event type" name="type">
               <option value="Holud">Mehendi & Holud</option>
               <option value="Reception">Marriage & Reception</option>
               <option value="Wedding">4 Days Wedding</option>
               <option value="Anniversary Party">Anniversary Party</option>
               <option value="Engagement">Engagement</option>
               <option value="Birthday Party">Birthday Party</option>
               <option value="New Year Party">New Year Party</option>
               <option value="Reunion Party">Reunion Party</option>
               <option value="Corporate Events">Corporate Events</option>
            </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Stage id :</span>
            <input type="number" placeholder="Stage ID" name="stage">
         </div>

         <div class="inputBox">
            <span>Color Theme :</span>
            <select placeholder="color theme" name="theme">
               <option value="Red and Golden">Red and Golden</option>
               <option value="Yellow and Green">Yellow and Green</option>
               <option value="Pink and Golden">Pink and Golden</option>
               <option value="Black and White">Black and White</option>
               <option value="Blue and White">Blue and White</option>
               <option value="Red and White">Red and White</option>
               <option value="Others">Others</option>
            </select>
         </div>


         <div class="inputBox">
            <span>Photographer :</span>
            <select placeholder="photographer" name="photographer">
               <option value="1.Jaasia">1.Jaasia</option>
               <option value="2.Oyshe">2.Oyshe</option>
               <option value="3.Raffin">3.Raffin</option>
               <option value="4.Farhan">4.Farhan</option>
               <option value="5.Borno">5.Borno</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Menu :</span>
            <select placeholder="menu" name="menu">
               <option value="1.Chinese">1.Chinese</option>
               <option value="2.Deshi">2.Deshi</option>
               <option value="3.Thai">3.Thai</option>
            </select>
         </div>
         

         <div class="inputBox">
            <span>Description :</span>
            <input type="text" name="description">
         </div>
         
      </div>

      <input type="submit" value="submit" class="btn" name="submit">

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