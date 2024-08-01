<?php
include('connection2.php');
include('connection.php');
session_start();
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sql = "SELECT * from signup1 where email='$email' AND pass='$pass'";
    $_SESSION['email']=$email;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        header("Location:donors.php");
    } else {
        echo "<script>alert('Wrong Email or Password')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="signin.css">
    <title>Sign In</title>
</head>

<body>
    <!-- NAV BAR -->
    <header>
        <span><img height=55 width=55 src="img/logo.png" alt="logo">
            <p style="display: inline; font-size: 32px;">DonorConnect</p>
        </span>
        <ul>
            <nav>
                <li class="hi"><a href="mini.php" class="link active">Home</a></li>
                <li><a href="About-Us.html" class="link">About Us</a></li>
                <li><a href="help.html" class="link">Help</a></li>
            </nav>
        </ul>
        <span>
            <a href="signin.php"><button class="bt1 bt">Sign In</button></a>
            <a href="register.php"><button class="reg-bt bt">Sign Up</button></a>
        </span>
    </header>
    <!--FORM BOX-->
<div class="form-box">
    <div class="login-container">
        
            <div class="top">
                <span class="span1"><h3>Don't have an account?</h3><a href="register.php" >Sign Up</a></span>
                <header><h2>Login</h2></header>
            </div>
            <div class="form-box">
                <div class="input-box">
                <form action="" method="post">
                    <input type="text" name="email" class="input-field" placeholder="Email-id">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" class="input-field" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box button">
                    <button class="submit">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>


</html>