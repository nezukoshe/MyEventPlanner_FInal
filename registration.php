<?php

include 'config.php';

if(isset($_POST['create'])){
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['pass']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpass']));
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $subscribe = mysqli_real_escape_string($conn, $_POST['subscribe']);

    $select = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exists';
    }else{
        if($password != $cpassword){
            $message[] = 'passwords do not match!';
        }else{
            $insert = mysqli_query($conn, "INSERT INTO `customer`(name, email, password, address, phone, gender, subscription) VALUES 
            ('$name', '$email', '$password', '$address', '$phone', '$gender', $subscribe)") or die('query failed');

            if($insert){
                $message[] = "Registration Successful!";
                header('location:login.php');
            }else{
                $message[] = "Registration Failed!";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="css/registration.css">
</head>

<body>
<div class="registration_box">
    <img src="css/images/avatar.jpg" class="avatar">
    <h1>SignUp</h1>
    <?php

    if (isset($message)){
        foreach ($message as $message){
            echo '<div class="message">'.$message.'</div>';
        }
    }
    ?>

    <form action="" method="post">
        <div class="user-details">
            <div class="inputs">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username" required>
                <p>Email</p>
                <input type="email" name="email" placeholder="example@domain.com" required>
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password" required>
                <p>Confirm password</p>
                <input type="password" name="cpass" placeholder="Confirm Password" required>
                <p>Address</p>
                <input type="text" name="address" placeholder="Enter Address" required>
                <p>Phone</p>
                <input type="tel" name="phone" placeholder="+8801xxxxxxxxx" required>
            </div>
            <p class="gname">Gender</p>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other<br>
            <img src="css/images/Subscribe.jpg" class="subscription"><br>
            <input type="radio" class="radiobutton2" name="subscribe" value="1" required>Subscribe!
            <input type="radio" class="radioButton2" name="subscribe" value="0">Skip for now<br>
            <input type="submit" class="inputs" name="create" value="SignUp">
            <a href="login.php">Already have an account? Login now!</a>
        </div>
    </form>
</div>
</body>
</html>