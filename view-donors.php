<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donor.css">
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
            <tr>
            <section class="table_body">   
               <!-- <td>Sr no.</td> -->
               <th>Sr no.</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Age</th>
               <th>Gender</th>
               <th>Blood Group</th>
               <th>Pincode</th>
               <th>Phone number</th>
            </tr>
            </section>
            <?php
            $q=$db->query("SELECT * FROM signup1");
            while($r1=$q->fetch(PDO::FETCH_OBJ))
            {
                ?>
                <tr>
                <!-- <td>Sr no.</td> -->
               <td><?= $r1->srno; ?></td>
               <td><?= $r1->fname; ?></td>
               <td><?= $r1->lname; ?></td>
               <td><?= $r1->age; ?></td>
               <td><?= $r1->gender; ?></td>
               <td><?= $r1->bgroup; ?></td> 
               <td><?= $r1->pincode; ?></td>
               <td><?= $r1->pno; ?></td>
              
               
                </tr>
                <?php
            }
            ?>


            
        </table>
    </div>
    </div>
</body>
</html>