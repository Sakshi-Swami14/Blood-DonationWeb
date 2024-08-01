<?php
include('connection2.php');
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donor.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Donors</title>
</head>
<body>
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
<div class="form">
    <div class="table">
        <table>
            <section class="table_header">
                <h1>Donors</h1>
            </section>
            <section class="table_body">   
                <tr>
                    <th>Sr no.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Pincode</th>
                    <th>Phone number</th>
                    <?php
                    // Display operations column only if the user is logged in
                    if (isset($_SESSION['email'])) {
                        echo "<th colspan='2' text-align='center'>Operations</th>";
                    }
                    ?>
                </tr>
            </section> 
            <?php
            $query = "SELECT * FROM signup1 WHERE fname != 'admin'";
            $data = mysqli_query($conn, $query);

            if (!$data) {
                die("Error in SQL query: " . mysqli_error($conn));
            }

            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>";
                    echo "<td>" . $result['srno'] . "</td>";
                    echo "<td>" . $result['fname'] . "</td>";
                    echo "<td>" . $result['lname'] . "</td>";
                    echo "<td>" . $result['age'] . "</td>";
                    echo "<td>" . $result['gender'] . "</td>";
                    echo "<td>" . $result['bgroup'] . "</td>";
                    echo "<td>" . $result['pincode'] . "</td>";
                    echo "<td>" . $result['pno'] . "</td>";
                    // Check if the user is logged in and admin
                    if (isset($_SESSION['email']) && $_SESSION['email'] == 'admin@gmail.com') {
                        // Display edit and delete buttons for admin
                        echo "<td><a href='edit.php?srno=" . $result['srno'] . "'><button class='edit edit1'>Update</button></a></td>";
                        echo "<td><a href='delete.php?fname=" . $result['fname'] . "'><button class='edit edit2'>Delete</button></a></td>";
                    } elseif (isset($_SESSION['email']) && $_SESSION['email'] == $result['email']) {
                        // Display edit and delete buttons for logged-in user
                        echo "<td><a href='edit.php?srno=" . $result['srno'] . "'><button class='edit edit1'>Update</button></a></td>";
                        echo "<td><a href='delete.php?fname=" . $result['fname'] . "'><button class='edit edit2'>Delete</button></a></td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No record found</td></tr>";
            }
            ?>

        </table>
    </div>
</div>
</body>
</html>
