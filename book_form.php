<?php

   //$connection = mysqli_connect('localhost','root','','mm_ecom');

   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $guests = $_POST['guests'];
      $dateofevent = $_POST['Your Check Out Date Is'];
      $description = $_POST['description'];

      $request = " insert into booking(name, email, address, guests, Your Check Out Date Is, description) values('$name','$email','$address','$guests','$YourCheckOutDateIs', '$description')";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>