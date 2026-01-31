<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rreth nesh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="foto/Ikona.png">
    <script src="index.js" defer></script>
</head>
<body>
<?php
echo '<header class="header">';
echo '<a href="index.php"><img class="imazhi" src="foto/Dbyas.png" alt="logo"></a>';
echo '<ul class="prindi">';
$pages = ['index.php'=>'Ballina', 'tour.php'=>'Tour', 'oferta.php'=>'Oferta', 'rrethNesh.php'=>'Rreth nesh'];
foreach($pages as $file=>$name){
    echo '<li><a href="'.$file.'"> '.$name.'</a></li>';
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

<main class="maiin" style="margin-top: 36px;">
<div class="rrethNesh">
<h2>Historiku</h2>
<p>Dbiyas është një agjenci turistike e themeluar në vitin 2020 në qytetin e Stambollit, Turqi. Me një pasion të thellë për udhëtimet dhe eksperimentet kulturore, themeluesit Dbiyas vendosën të krijonin një agjenci që do të ofronte mundësi udhëtimi unike dhe të personalizuara në Evropë.</p>
<p>Tregu dhe Prezenca Ndërkombëtare: Dbiyas ka zgjeruar shërbimet e saj në disa nga destinacionet më të bukura të Evropës. Me zyra në Stamboll, Prishtinë dhe Tiranë. Agjencia është e njohur për ofrimin e paketave turistike të personalizuara dhe përvoja unike që tërheqin udhëtarët nga e gjithë bota.</p>

<ul>
<li><b>Tregu</b>
    <p>Dbiyas ofron udhëtime të paharrueshme në destinacione të njohura për bukurinë dhe kulturën e tyre:</p>
    <p>Turqi: Eksploroni qytetet e jashtëzakonshme si Stamboll, ku historia dhe moderniteti takohen, si dhe pushoni në plazhet e mrekullueshme të Antalya dhe Belek, të njohura për kurortet e luksit dhe peizazhet mahnitëse.</p>
    <p>Franca: Shijoni romantizmin e Parisit, me atraksione të njohura si Eiffel Tower dhe Louvre, si dhe vizitoni qytetet historike të rajonit të Provencës për një përvojë autentike franceze.</p>
    <p>Greqi: Shijoni pushime relaksuese në ishujt si Santorini dhe Mykonos, të njohur për plazhet e mrekullueshme dhe kulturën e pasur.</p>
</li>

<li><b>Zhvillimet e fundit</b>
    <p>Në vitin 2022, Dbiyas lançoi një platformë online për rezervime dhe udhëzime të personalizuara, ku klientët mund të krijojnë udhëtime sipas preferencave të tyre, të përfshijnë aktivitete speciale dhe të bëjnë ndryshime në udhëtimet e tyre në minutë.</p>
</li>

<li><b>Vlerat e Brendit</b>
    <p>Në Dbiyas, angazhohemi për:</p>
    <ul>
        <li>Shërbim cilësor dhe personalizim: Ofrimi i përvojave të paharrueshme, duke përmbushur nevojat e çdo udhëtari</li>
        <li>Eksplorim dhe aventura: Sigurimi i mundësive për t'u zhytur në kulturat dhe natyrën e pasur të Evropës.</li>
        <li>Përkushtim ndaj sigurisë: Sigurojmë që çdo udhëtim të jetë i sigurt, i planifikuar mirë dhe i mbushur me mundësi për eksperienca autentike.</li>
    </ul>
</li>
</ul>

<section class="testimonials">
<h2>Çfarë thonë klientët tanë</h2>
<div class="testimonial-container">
<?php
$testimonials = [
    ['img'=>'foto/foto5.png','name'=>'Arlinda M.','comment'=>'"Eksperienca jonë në Antalya ishte magjike! Faleminderit Dbiyas Tour për organizimin perfekt."'],
    ['img'=>'foto/foto6.png','name'=>'Besnik K.','comment'=>'"Shërbimi ishte fantastik. Gjithçka shkoi sipas planit dhe hoteli ishte shumë komod."'],
    ['img'=>'foto/foto7.png','name'=>'Fjolla T.','comment'=>'"Një përvojë e paharrueshme me destinacione të mrekullueshme! Ju rekomandoj shumë Dbiyas Tour."']
];
foreach($testimonials as $t){
    echo '<div class="testimonial-card">';
    echo '<img src="'.$t['img'].'" alt="Klienti" class="client-photo">';
    echo '<h3>'.$t['name'].'</h3>';
    echo '<p class="client-comment">'.$t['comment'].'</p>';
    echo '<div class="stars">⭐⭐⭐⭐⭐</div>';
    echo '</div>';
}
?>
</div>
</section>

<div class="tituull">
<p>....................................................</p>
</div>
</main>
</body>
</html>
