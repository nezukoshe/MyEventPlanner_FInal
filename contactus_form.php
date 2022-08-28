<?php

   $connection = mysqli_connect('localhost','root','','cu');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $message = $_POST['message'];
      

      $request = " insert into cu_form(name, email, phone, address,message) values('$name','$email','$phone','$address','$message') ";
      mysqli_query($connection, $request);

      header('location:contactus.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>