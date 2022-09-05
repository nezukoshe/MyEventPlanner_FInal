<?php

$conn = mysqli_connect('localhost','root', '', 'form') or die('connection failed');

if($conn == false){
    dir('Error: Cannot connect');
}

?>
