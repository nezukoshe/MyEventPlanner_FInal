<?php

   $connection = mysqli_connect('localhost','root','','form');

   if(isset($_POST['submit'])){
      $dateofevent = $_POST['dateofevent'];
      $timeofevent = $_POST['timeofevent'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $type = $_POST['type'];
      $guests = $_POST['guests'];
      $stage = $_POST['stage'];
      $theme = $_POST['theme'];
      $photographer = $_POST['photographer'];
      $menu = $_POST['menu'];
      $description = $_POST['description'];

      $request = " insert into booking(dateofevent, timeofevent, name, email, phone, address, type, guests, stage, theme, photographer, menu, description) values('$dateofevent','$timeofevent','$name','$email','$phone','$address','$type','$guests','$stage','$theme','$photographer', '$menu', '$description')";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>