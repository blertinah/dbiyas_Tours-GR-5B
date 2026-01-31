<?php
$title = "Këshilla për udhëtime";

$udhezime = [
    "Arrini në aeroport të paktën 2 orë para fluturimit",
    "Kontrolloni dokumentet para nisjes",
    "Mos e tejkaloni peshën e bagazhit",
    "Mbani kopje të dokumenteve",
    "Rikonfirmoni orarin e fluturimit"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="foto/Ikona.png">
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
</header>

<main class="maiin">
    <h2><?php echo $title; ?></h2>

    <div class="divat">
        <h3 class="fonti">Udhëtimi me avion</h3>

        <ul>
            <?php foreach ($udhezime as $u): ?>
                <li><?php echo $u; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="divat">
        <h3 class="fonti">E rëndësishme!</h3>
        <p>
            Nëse humbni dokumentet, kontaktoni menjëherë policinë dhe
            zyrën konsullore më të afërt.
        </p>
    </div>
</main>

<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Dbiyas Tours</p>
</footer>

</body>
</html>
