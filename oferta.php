<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta speciale</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="foto/Ikona.png">
    <script src="index.js" defer></script>
</head>
<body>
<?php
echo '<header class="header">';
echo '<img class="imazhi" src="foto/Dbyas.png" alt="logo">';
echo '<ul class="prindi">';
$pages = ['index.php'=>'Ballina', 'tour.php'=>'Tour', 'oferta.php'=>'Oferta', 'rrethNesh.php'=>'Rreth nesh'];
foreach($pages as $file=>$name){
    echo '<li><a href="'.$file.'">'.$name.'</a></li>';
}
echo '</ul>';
echo '<ul class="prindi2">';
echo '<button id="whatsappButton" type="button" class="butoni1"><img class="imazhii" src="foto/WhatsApp.png" alt="logo"> Whatsapp</button>';
echo '<button id="kycuBtn" type="button" class="butoni2">Kycu</button>';
echo '<div id="loginModal" class="kyqumeemail">
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
      </div>';
echo '</ul>';
echo '</header>';
?>
<main>
<h2>OFERTA SPECIALE</h2>
<div class="main3">
    <div class="container">
        <div class="offer">
            <h1 id="lapland">30% ZBRITJE PËR UDHËTIMIN TUAJ MAGJIK NË LAPLAND</h1>
            <p>Ndjeni magjin e fetsave të fundvitit së bashku me familjen tuaj!</p>
            <ul>
                <li>Përfitoni nga oferta jonë speciale:
                    <ul>
                        <li>Eksploroni Dritat Veriore nën qiellin polar</li>
                        <li>Akomodim në kabina të ngrohta prej druri</li>
                        <li>Eksperienca unike si shëtitje me sajë të tërhequr nga drerë dhe vizita në fshatin e Santa Claus</li>
                    </ul>
                </li>
            </ul>
            <p>&#8987; Rezervoni tani dhe krijoni kujtime që zgjasin një jetë!</p>
            <p>&#128171;Oferta është e vlefshme vetëm për një kohë të kufizuar!</p>
            <p>&#128140;Na kontaktoni për detaje dhe rezervime.</p>
        </div>
        <div class="form">
            <h2>Sign Up Now</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $destination = htmlspecialchars($_POST['destination']);
                echo '<p>Faleminderit '.$name.'! Rezervimi për '.$destination.' u pranua.</p>';
            }
            ?>
            <form method="POST">
                <input type="text" name="name" placeholder="Your name" required>
                <input type="email" name="email" placeholder="Your email" required>
                <select name="destination" required>
                    <option value="" disabled selected>Select a destination</option>
                    <option value="lapland">Lapland</option>
                </select>
                <button type="submit" name="signup">Sign Up Now</button>
            </form>
        </div>
    </div>
</div>
<div class="main2">
    <div class="guides-section">
        <h2>Udhëzuesit tonë të udhëtimit</h2>
        <p>Njihuni me udhëzuesit tanë profesionistë dhe miqësorë të gatshëm për ta bërë udhëtimin tuaj të paharrueshëm.</p>
        <div class="guides-container">
            <?php
            $guides = [
                ['img'=>'foto/foto2.png', 'name'=>'Arlinda Gashi', 'role'=>'Udhëzuese Udhëtimesh'],
                ['img'=>'foto/foto3.png', 'name'=>'Kreshnik Zeqiri', 'role'=>'Udhëzues Udhëtimesh'],
                ['img'=>'foto/foto4.png', 'name'=>'Fjolla Krasniqi', 'role'=>'Udhëzuese Udhëtimesh']
            ];
            foreach($guides as $g){
                echo '<div class="guide-card">';
                echo '<img src="'.$g['img'].'" alt="Guide">';
                echo '<h3>'.$g['name'].'</h3>';
                echo '<p>'.$g['role'].'</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
</main>
<?php
echo '<footer class="footer">';
echo '<div class="prindi6">';
echo '<h4>Informacion i rëndësishëm</h4>';
echo '<ul class="prindi-li">';
$info_links = ['keshilla.php'=>'Këshilla për udhëtime', 'oferta.php'=>'Ofertat speciale', 'rrethNesh.php'=>'Rreth nesh'];
foreach($info_links as $file=>$text){
    echo '<li><a href="'.$file.'">'.$text.'</a></li>';
}
echo '</ul></div>';
echo '<div class="prindi7">';
echo '<h4>Kontakti</h4>';
echo '<ul class="prindi-li2">';
echo '<li>Phone: +383 46 439 492</li>';
echo '<li>Email: sahabuddin@gmail.com</li>';
echo '<li>Address: Lagjja Dardania Prishtin, Kosove.</li>';
echo '<li>&#128344; Sat - Fri (9.00am-9.00pm)</li>';
echo '</ul></div>';
echo '</footer>';
echo '<div class="footer1">';
echo '<div class="footer-image1"><img src="foto/Picture.png" alt=""></div>';
echo '<div class="footer-image2"><img class="image" src="foto/payment.webp" alt=""></div>';
echo '</div>';
?>
</body>
</html>
