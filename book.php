<?php
// Set email variables
$email_to = 'andy_tvw@yahoo.co.uk';
$email_subject = 'Form submission';
// Set required fields
$required_fields = array('fullname','fulladdress','email','comment','checkforblankfield');
// set error messages
$error_messages = array(
 'fullname' => 'Please enter a Name to proceed.',
 'fulladdress' => 'Please enter your Contact Address to proceed.',
 'email' => 'Please enter a valid Email Address to continue.',
 'comment' => 'Please enter your Message to continue.',
 'checkforblankfield' => 'You need to select a Date.' // check for NO input into datepicker form
);
// Set form status
$form_complete = FALSE;
// configure validation array
$validation = array();
// check form submittal
if(!empty($_POST)) {
 // Sanitise POST array
 foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
 
 // Loop into required fields and make sure they match our needs
 foreach($required_fields as $field) {  
  // the field has been submitted?
  if(!array_key_exists($field, $_POST)) array_push($validation, $field);
  
  // check there is information in the field?
  if($_POST[$field] == '') array_push($validation, $field);
  
  // validate the email address supplied
  if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
 }
 
 // basic validation result
 if(count($validation) == 0) {
  // Prepare our content string
  $email_content = 'New Website Comment: ' . "\n\n";
  
  // simple email content
  foreach($_POST as $key => $value) {
   if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
  }
  
  // if validation passed ok then send the email
  mail($email_to, $email_subject, $email_content);
  
  // Update form switch
  $form_complete = TRUE;
 }
}
function validate_email_address($email = FALSE) {
 return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}
function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/redmond/jquery-ui.css" rel=  "stylesheet" type="text/css"/>
    
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
   
    <script type="text/javascript" src="contact/validation/validation.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>
   
 <script type="text/javascript">
  var nameError = '<?php echo $error_messages['fullname']; ?>';
  var fulladdress ='<?php echo $error_messages['fulladdress']; ?>';
  var emailError = '<?php echo $error_messages['email']; ?>';
  var commentError = '<?php echo $error_messages['comment']; ?>';
  var checkforblankfield = '<?php echo $error_messages['checkforblankfield']; ?>';
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

   <a href="home.php" class="logo">My Event planner </a>

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

<div class="heading" style="background:url(images/book.jpeg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Confirm Your Event </h1>

   <form action="book_form.php" method="post" class="book-form">

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
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>

         
         <div class="inputBox">
            <span>Number of Guests :</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         
        
         <div class="inputBox">
            <span>Select your Date:</span>


<!-- Start of datepicker -->
<script>
 $(document).ready(function()
  {
     $("#datepicker").datepicker();
  });
 </script>
 
   
<!--  $(selector).datepick({dateFormat: 'yyyy-mm-dd'});  for my example -->
 <script> 
   
 

  $(function() {     
       $.datepicker.setDefaults({dateFormat: 'DD, d  MM yy', autoSize: true,
          minDate: -0, maxDate: '+1M +05D', showOn: 'button',
         buttonImage: 'images/calendar-empty.gif', buttonImageOnly: true, });
  $('input[name="Your Check In Date Is"],input[name="Your Check Out Date Is"]').datepicker();
 
 }); 
 
</script>
 
     <!-- Start of  Date field input Block that i want to check for empty field on the datepicker -->
<!-- how to take  what is inside .datepicker and work it into the code below -->

 


 <div class="row">
    
    
     
    </div> <!-- end .row -->
<!-- End of Block -->

    <!-- Place the Selected Dates into .datepicker() and  Email -->
 <script type="text/javascript">
        $(function(){ 
            $("input[name='Your Check In Date Is']").datepicker();
            $("input[name='Your Check Out Date Is']").datepicker();
        });
    </script>  
        
    
   
    <input name="Your Check Out Date Is" maxlength="30" class="text ui-widget-content ui-corner-all" />
   
    <!-- End of datepicker  -->  

</div>
<div class="inputBox">
            <span>Description :</span>
            <input type="text" placeholder="details about your event" name="description">
         </div>

</div>

      <button type="submit" value="submit" class="btn" name="send"><a href="order-details.php">SEND</a></button>

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +01733110068 </a>
         <a href="#"> <i class="fas fa-phone"></i> +01733110064 </a>
         <a href="#"> <i class="fas fa-envelope"></i> bony@gmail.com </a>
         <a href="#"> <i class="fas fa-envelope"></i> raffin@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mirpur, dhaka - 1216 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>AB & DM</span> | all rights reserved! </div>

</section>


<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script language="javascript">
<!--
function myChanged(v){
	alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
//-->
</script>

</body>
</html>