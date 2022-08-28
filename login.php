
<?php 

include 'login_form.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<!-- swiper css link  -->
<link rel="stylesheet"  type="text/css"  href="style.css">
<link rel="stylesheet"  type="text/css"
 href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="style.css">


 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">




    
</head>
<body>



<section class="header">

   <a href="home.php" class="logo">MyEventPlanner.</a>

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


<!--login  start-->


<section class="login">

<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a>.</p>
		</form>
	</div>
</sectiom>



















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





<script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>



    
</body>
</html>