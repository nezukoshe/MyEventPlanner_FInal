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
    <img src="css/images/avatar.jpg" class="avatar">
    <h1>Login Here</h1>
    <?php

    if (isset($message)){
        foreach ($message as $message){
            echo '<div class="alert">'.$message.'</div>';
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
