<?php

include 'config.php';
session_start();

if(isset($_POST['create'])) {

    $email1 = mysqli_real_escape_string($conn, $_POST['email']);
    $password1 = mysqli_real_escape_string($conn, md5($_POST['pass']));

    $email2 = mysqli_real_escape_string($conn, $_POST['email']);
    $password2 = mysqli_real_escape_string($conn, $_POST['pass']);

    $sel1 = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email1' AND password = '$password1'") or die('query failed');
    $sel2 = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '$email2' AND password = '$password2'") or die('query failed');

    print(mysqli_num_rows($sel2));

    if (mysqli_num_rows($sel1) > 0) {
        $row = mysqli_fetch_assoc($sel1);
        $_SESSION['user_id'] = $row['id'];
        header('location:Home.php');
    }elseif (mysqli_num_rows($sel2) > 0){
        $row = mysqli_fetch_assoc($sel2);
        $_SESSION['user_id'] = $row['id'];
        header('location:admin-dashboard.php');
    } else {
        $message[] = 'incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
<div class="login_box">
    <img src="images/avatar.jpg" class="avatar">
    <h1>Login Here</h1>
    <?php

<<<<<<< HEAD


<section class="header">

   <a href="home.php" class="logo">Tourbros.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
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
				<button name="submit" class="btn"> Login </button>
            
			</div>
			<p class="login-register-text">Don't have an account? <a href="registration.php" style="color: #6fdd97;" >Register Here</a>.</p>
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
=======
    if (isset($message)){
        foreach ($message as $message){
            echo '<div class="alert">'.$message.'</div>';
>>>>>>> fa4cb2e18725f4bd8071296f408a73035091a07d
        }
    }
    ?>
    <form action="" method="post">
        <p>Email</p>
        <input type="email" name="email" placeholder="Enter email">
        <p>Password</p>
        <input type="password" name="pass" placeholder="Enter Password">
        <input type="submit" name="create" value="Login">
        <a href="forgot_password.php">Forgot Password?</a><br>
        <a href="registration.php">Don't have an account yet? Sign up!</a>
    </form>
</div>
</body>
</html>
