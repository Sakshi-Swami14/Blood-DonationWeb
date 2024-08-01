
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonorConnect</title>
    <link rel="stylesheet" href="mini.css">
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
    <div class="bg-img">
        <div class="container-text">
            <h2>
                Your birthday can be someone else's special day as well. Make your birthday memeorable by giving someone
                the
                "Gift of Life". Donate blood. Donate for a cause.
            </h2>
            <div class="buttons">
                <div><a href="signin.php"><button class="btnn">Donor Login</button></div></a>
                <div><a href="view-donors.php"><button class="btnn">Search Donors</button></div></a>
            </div>
        </div>
    </div>
    <div class="boxes">
        <section>
            <div class="counters">
                <div class="counter-wrapper">
                    <span class="counter-icon">🩸</span>
                    <div class="counter-info">
                        <h1 class="counter" data-count="20">0</h1>
                        <p>Donors Registered</p>
                    </div>
                </div>
                <div class="counter-wrapper">
                    <span class="counter-icon">💉</span>
                    <div class="counter-info">
                        <h1 class="counter" data-count="20">0</h1>
                        <p>Happy patients</p>
                    </div>
                </div>
            </div>
            
            <script>
                const counters = document.querySelectorAll(".counter");
                counters.forEach(counter => {
                    let initial_count = 0;
                    const final_count = counter.dataset.count;
                    let countingSpeed = 100; // Adjust this value to decrease the counting speed
                    let counting = setInterval(updateCounting, countingSpeed);

                    function updateCounting() {
                        if (initial_count < 20) { // Just as a placeholder, modify this condition as needed
                            initial_count = initial_count + 1;
                            counter.innerText = initial_count;
                        }

                        if (initial_count >= final_count) {
                            clearInterval(counting);
                        }
                    }
                });
            </script>

        </section>

    </div>
<section>
    <h1 >Learn About Donation</h1>
    <div class="learn">
        <div class="img img1">
            <img src="img/section-bg.jpg" alt="">
        </div>
        <div class="img img2">
            <img src="img/section2.png" alt="">
        </div>

    </div>
</section>

</body>
<footer>
    <div class="footerContainer">
        
        <div class="footerNav">
            <ul>
                <li><a href="mini.php">Home</a></li>
                <li><a href="About-Us.html">About us</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="signin.php">Donor login</a></li>

            </ul>
        </div>
        
    </div>
</footer>
<div class="footerBottom">
    <p> Designed by <span class="designer"> Advait Nikam & Sakshi Swami</span></p>
</div>

</html>