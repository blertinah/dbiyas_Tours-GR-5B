<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <link rel="icon" href="foto/Ikona.png">
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
</head>

<body>

<header class="header">
    <a href="index.php">
        <img class="imazhi" src="foto/Dbyas.png" alt="logo">
    </a>

    <ul class="prindi">
        <li><a href="index.php">Ballina</a></li>
        <li><a href="tour.php">Tour</a></li>
        <li><a href="oferta.php">Oferta</a></li>
        <li><a href="rrethNesh.php">Rreth nesh</a></li>
    </ul>

    <ul class="prindi2">
        <button id="whatsappButton" type="button" class="butoni1">
            <img class="imazhii" src="foto/WhatsApp.png" alt="logo">
            Whatsapp
        </button>

        <button id="kycuBtn" type="button" class="butoni2">Kycu</button>

        <div id="loginModal" class="kyqumeemail">
            <div class="kyqumeemil1">
                <button id="closeLogin" class="kyqumeemail6">X</button>
                <h3 class="kyqufile">Sign in to your account</h3>

                <label>Username</label>
                <input type="text" class="kyqumeemail2" placeholder="Username">

                <label>Email</label>
                <input type="email" class="kyqumeemail3" placeholder="Username@gmail.com">

                <label>Password</label>
                <input type="password" class="kyqumeemail4" placeholder="Password">

                <button class="kyqumeemail5">Log in</button>
            </div>
        </div>
    </ul>
</header>

<main>
    <h2>Udhetime me airoplan</h2>

    <div class="tekst">
        <p>
            Një city break është mundësia perfekte për të ecur dhe eksploruar çdo qoshe.<br>
            Shijoni atmosferën e rrugicave, kafeneve dhe dyqaneve të vogla.<br>
            Bëni foto të peizazheve mahnitëse dhe ndjeni vibrimin unik të jetës urbane.
        </p>
    </div>

    <div class="prindi-toureve">
        <?php
        $tours = [
            ["France.png", "France.php", "Udhëtime në Francë"],
            ["Zvicerr.png", "zvicer.php", "Udhëtime në Zvicër"],
            ["italy.jpg", "italy.php", "Udhëtime në Itali"],
            ["Austri.png", "austri.php", "Udhëtime në Austri"],
            ["Holand.png", "holland.php", "Udhëtime në Hollandë", true],
            ["Dubai.png", "dubai.php", "Udhëtime në Abu Dhabi", true]
        ];

        foreach ($tours as $tour) {
            $cls = isset($tour[3]) ? 'more-photos' : '';
            echo '
            <div class="'.$cls.'">
                <img class="toure" src="foto/'.$tour[0].'" alt="">
                <div class="femija-tour">
                    <h3><a class="a2" href="'.$tour[1].'"><b>'.$tour[2].'</b></a></h3>
                </div>
            </div>';
        }
        ?>
    </div>

    <div class="ButoniperView">
        <button id="viewMoreBtn">
            View More <img class="fotobutton" src="foto/ikonaj.png">
        </button>
    </div>
</main>

<footer class="footer">
    <div class="prindi6">
        <h4>Informacion i rëndësishëm</h4>
        <ul class="prindi-li">
            <li><a href="keshilla.php">Këshilla për udhëtime</a></li>
            <li><a href="oferta.php">Ofertat speciale</a></li>
            <li><a href="rrethNesh.php">Rreth nesh</a></li>
        </ul>
    </div>

    <div class="prindi7">
        <h4>Kontakti</h4>
        <ul class="prindi-li2">
            <li>Phone: +383 46 439 492</li>
            <li>Email: sahabuddin@gmail.com</li>
            <li>Address: Lagjja Dardania Prishtinë Kosovë</li>
            <li>🕘 Sat - Fri (9.00am-9.00pm)</li>
        </ul>
    </div>
</footer>

<div class="footer1">
    <div class="footer-image1">
        <img src="foto/Picture.png" alt="">
    </div>
    <div class="footer-image2">
        <img class="image" src="foto/payment.webp" alt="">
    </div>
</div>

<script>
document.getElementById('viewMoreBtn').addEventListener('click', function () {
    const items = document.querySelectorAll('.more-photos');
    const show = items[0].style.display !== 'block';

    items.forEach(i => i.style.display = show ? 'block' : 'none');
    this.textContent = show ? 'View Less' : 'View More';
});
</script>

</body>
</html>
