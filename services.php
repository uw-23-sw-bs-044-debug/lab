<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Our Professional Services</h1>
        <p>Reliable solutions for your home, vehicle, beauty, and technology needs</p>
    </div>
</section>

<!-- SERVICES GRID -->
<section id="services" class="container">

    <div class="about-cards"><!-- using existing grid -->

        <!-- CARD 1 -->
        <div class="about-card">
            <div>
                <img src="home.jpg">
                <h3>Home Services</h3>
                <p>Plumbing, electrical work, painting, and complete home maintenance.</p>
            </div>
            <a href="booking.php?service=Home" class="btn btn-primary">Book Now</a>
        </div>

        <!-- CARD 2 -->
        <div class="about-card">
            <div>
                 <img src="aps.jpg">
                <h3>Appliance Services</h3>
                <p>Repair and installation of ACs, refrigerators, washing machines.</p>
            </div>
            <a href="booking.php?service=Appliance" class="btn btn-primary">Book Now</a>
        </div>

        <!-- CARD 3 -->
        <div class="about-card">
            <div>
                  <img src="vs.jpg">
                <h3>Vehicle Services</h3>
                <p>Car servicing, bike maintenance, oil changes, and roadside help.</p>
            </div>
            <a href="booking.php?service=Vehicle" class="btn btn-primary">Book Now</a>
        </div>

        <!-- CARD 4 -->
        <div class="about-card">
            <div>
                <img src="bs.jpg">
                <h3>Beauty Services</h3>
                <p>Salon services including haircut, makeup, and skincare.</p>
            </div>
            <a href="booking.php?service=Beauty" class="btn btn-primary">Book Now</a>
        </div>

        <!-- CARD 5 -->
        <div class="about-card">
            <div>
                 <img src="is.jpg">
                <h3>IT & Tech Services</h3>
                <p>Laptop repair, mobile fixing, networking and software setup.</p>
            </div>
            <a href="booking.php?service=IT" class="btn btn-primary">Book Now</a>
        </div>

        <!-- CARD 6 -->
        <div class="about-card">
            <div>
                <img src="cs.jpg">
                <h3>Cleaning Services</h3>
                <p>Home, office, and commercial cleaning by trained professionals.</p>
            </div>
            <a href="booking.php?service=Cleaning" class="btn btn-primary">Book Now</a>
        </div>

    </div>

</section>

<?php include "footer.php"; ?>
</body>
</html>
