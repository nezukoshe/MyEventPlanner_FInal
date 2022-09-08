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





<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
  
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


























		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal | Payment Method</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">

		
	    <link rel="stylesheet" href="css/style.css">











	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Confirm Your Event </h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
        
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>

         
        <div class="inputBox">
            <span>Description :</span>
            <input type="number" placeholder="Say us about your event details" name="guests">
         </div>

		 <div class="inputBox">
            <span>Event Date :</span>
            <input type="date" placeholder="Say us about your event details" name="date">
         </div>
    

   </form>

</section>






























<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2>Choose Payment Method</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Select your Payment Method
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
	    <form name="payment" method="post">
	    <input type="radio" name="paymethod" value="COD" checked="checked"> COD
	     <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
	     <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card <br /><br />
	     <input type="submit" value="submit" name="submit" class="btn btn-primary" >
		

	    </form>		
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php //echo include('includes/brands-slider.php');?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php //include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>

	<script language="javascript">
<!--
function myChanged(v){
	alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
//-->
</script>















	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>
<?php } ?>