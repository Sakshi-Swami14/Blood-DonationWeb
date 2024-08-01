<?php
include('connection2.php');
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="register.css">
    <title>Sign-Up</title>
</head>

<body>
    <!-- NAV BAR -->
    <header>
    <span><img height=55 width=55 src="img/logo.png" alt="logo">
        <p style="display: inline; font-size: 32px;" >DonorConnect</p>
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



    <!-- Resister form : -->


  
    <form action=" " method="post">
    <div class="form-box">

        <div class="register-container" id="register">
        <div class="top">
                <span class="span1"><h2>Have an account?</h2><a href="signin.php" >Login</a></span>
                <header><h2>Sign Up</h2></header>
            </div>
            <div class="two-forms">
                <div class="input-box input-2box">
                    <input type="text" name="fname" id="fname" class="input-field" placeholder="First Name">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box input-2box">
                    <input type="text" name="lname" id="lname" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box input">
                <input type="text" name="age" id="age" class="input-field" placeholder="Age">
                <i class='bx bxl-github'></i>
            </div>
            <div class="input-box input option" >
                <select class="radio" name="gender" >
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            
            </div>
            <div class="input-box input">
                <input type="text" name="email" id="email" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box input">
                <input type="text" name="pno" id="pno" class="input-field" placeholder="Phone Number">
                <i class='bx bx-phone-call'></i>
            </div>
            <div class="input-box input">
                <input type="text" class="input-field" name="pincode" id="pincode" placeholder="Pincode">
                <i class='bx bx-current-location'></i>
            </div>
            <div class="input-box input">
                <input type="text" class="input-field"name="bgroup" id="bgroup" placeholder="Blood Group">
                <i class='bx bxs-donate-blood'></i>
            </div>
            
            <div class="input-box input">
                <input type="password" class="input-field" name="pass" id="pass" placeholder="Set a Password">
                <i class='bx bx-lock-alt'></i>
            </div>
            
            <button name="sign-up" id="sign-up"class="sign-up">Sign Up</button>
        </div>
    </div>
</form>

</body>

</html>
<?php
if(isset($_POST['sign-up'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $pincode = $_POST['pincode'];
    $bgroup = $_POST['bgroup'];
    $pass = $_POST['pass'];
    $query="INSERT INTO signup1(fname,lname,age,gender,email,pno,pincode,bgroup,pass) VALUES ('$fname','$lname','$age','$gender','$email','$pno','$pincode','$bgroup','$pass')"; 

    /* $query = "update signup1 set fname='$fname',lname='$lname',email='$email',pno='$pno',pincode='$pincode',bgroup='$bgroup',pass='$pass'"; */
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Donor successfully registered')</script>";
       
    } else {
        echo "<script>alert('Data Registration unsuccessful!')</script>";
    }
}
?>





