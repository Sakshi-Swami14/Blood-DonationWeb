<?php
include("connection.php");
include("connection2.php");
session_start();


    $srno = $_GET['srno'];
    $query = "select * from signup1 where srno='$srno'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="register.css">
    <title>Edit</title>
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



    <!-- Resister form : -->


    <div class="text-container">
        <div class="signup-text">
            <h1>Sign Up</h1>
        </div>
    </div>
    <form action=" " method="post">
        <div class="form-box">

            <div class="register-container" id="register">
                <div class="two-forms">

                    <div class="input-box input-2box">
                        <input type="text" value="<?php echo $result['fname']; ?>" name="fname" id="fname" class="input-field" placeholder="First Name">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box input-2box">
                        <input type="text" value="<?php echo $result['lname']; ?>" name="lname" id="lname" class="input-field" placeholder="Lastname">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box input">
                    <input type="text" value="<?php echo $result['age']; ?>" name="age" id="age" class="input-field" placeholder="Age">
                    <i class='bx bxl-github'></i>
                </div>
                <div class="input-box input option">
                    <select class="radio" name="gender">
                        <option value="">Gender</option>
                        <option value="male" 
                        <?php
                        if ($result['gender'] == 'male') {
                        echo "selected";
                        }
                        ?>
                        >
                        Male</option>
                        <option value="female" 
                        <?php
                        if ($result['gender'] == 'female') {
                        echo "selected";
                        }
                        ?>>
                        Female</option>
                    </select>

                </div>
                <div class="input-box input">
                    <input type="text" value="<?php echo $result['email']; ?>" name="email" id="email" class="input-field" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box input">
                    <input type="text" value="<?php echo $result['pno']; ?>" name="pno" id="pno" class="input-field" placeholder="Phone Number">
                    <i class='bx bx-phone-call'></i>
                </div>
                <div class="input-box input">
                    <input type="text" value="<?php echo $result['pincode']; ?>" class="input-field" name="pincode" id="pincode" placeholder="Pincode">
                    <i class='bx bx-current-location'></i>
                </div>
                <div class="input-box input">
                    <input type="text" value="<?php echo $result['bgroup']; ?>" class="input-field" name="bgroup" id="bgroup" placeholder="Blood Group">
                    <i class='bx bxs-donate-blood'></i>
                </div>

                <div class="input-box input">
                    <input type="text" class="input-field" value="<?php echo $result['pass']; ?>" name="pass" id="pass" placeholder="Set a Password">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <button name="update" id="sign-up" class="sign-up">Update Details</button>
            </div>
        </div>
    </form>

</body>

</html>


<?php


    if (isset($_POST['update'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pno = $_POST['pno'];
        $pincode = $_POST['pincode'];
        $bgroup = $_POST['bgroup'];
        $pass = $_POST['pass'];
        /*   $query="INSERT INTO signup1( fname, lname, email, pno, pincode, bgroup,pass) VALUES ('$fname','$lname','$email', '$pno', '$pincode', '$bgroup','$pass')";  */
    
        $query = "update signup1 set fname='$fname',lname='$lname',age='$age',gender='$gender',email='$email',pno='$pno',pincode='$pincode',bgroup='$bgroup',pass='$pass'WHERE srno='$srno'";
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo "<script>alert('Data Updated Successfully')</script>";
        } else {
            echo "<script>alert('Data Updation Unsuccesfull')</script>";
        }
    }

?>


?>