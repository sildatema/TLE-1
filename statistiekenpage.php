<?php

/** @var $db */
require_once "database-connection.php";
$DayOfWeek = date("N");

$query = "SELECT * FROM stats WHERE id = $DayOfWeek";


$result = mysqli_query($db,$query)
or die('Error '.mysqli_error($db).' with query '.$query);

$Statistics = [];

while($row = mysqli_fetch_assoc($result))
{
    $Statistics = $row;

}
$energyGenerated= $Statistics['generated-energy'];
$energyConsumed = $Statistics['consumed-energy'];
$sunHours = $Statistics['sun-hours'];
$bestYield = $Statistics['best-energy-yield'];
$dollarSaved = $Statistics['euro-saved'];

mysqli_close($db);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistieken pagina</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="nav-text">
            <a href="./homepage.html">Hoofdpagina</a>
        </div>

        <div class="nav-logo">
            <img src="img/logo.png" alt="logo">
        </div>

        <div class="nav-text">
            <a href="./statistiekenpage.php">Statistieken</a>
        </div>
    </nav>

    <header class="header-stats">
        <h1>Statistieken</h1>
    </header>

    <main class="main-stats">
        <section class="stats">
            <div class="generated-energy">
                <div class="stats-img">
                    <img src="img/saving.png" alt="energy">
                </div>
                <div class="stats-text">
                    <div>
                        <p>Opgewekte energie</p>
                    </div>
                    <div>
                        <p><?= $energyGenerated?></p>
                    </div>
                </div>
            </div>

            <div class="consumed-energy">
                <div class="stats-img">
                    <img src="img/used.png" alt="energy">
                </div>
                <div class="stats-text">
                    <div>
                        <p>Verbruikte energie</p>
                    </div>
                    <div>
                        <p><?= $energyConsumed?></p>
                    </div>
                </div>
            </div>

            <div class="sun-hours">
                <div class="stats-img">
                    <img src="img/sun.png" alt="energy">
                </div>
                <div class="stats-text">
                    <div>
                        <p>Zonuren</p>
                    </div>
                    <div>
                        <p><?= $sunHours?></p>
                    </div>
                </div>
            </div>

            <div class="best-energy-yield">
                <div class="stats-img">
                    <img src="img/energy.png" alt="energy">
                </div>
                <div class="stats-text">
                    <div>
                        <p>Beste energie opbrengst</p>
                    </div>
                    <div>
                        <p><?= $bestYield?></p>
                    </div>
                </div>
            </div>

            <div class="euro-saved">
                <div class="stats-img">
                    <img src="img/money.png" alt="energy">
                </div>
                <div class="stats-text">
                    <div>
                        <p>Euro's bespaard</p>
                    </div>
                    <div>
                        <p><?= $dollarSaved?></p>
                    </div>
                </div>
            </div>
    </section>
    </main>
  

    <footer>
        <div class="footer">
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Contact</a>
        </div>

        <div class="footer-logo">
            <div>
                <img src="img/logo.png" alt="logo" class="picture">
            </div>
        </div>

        <div class="footer">
            <a href="#">Privacyverklaring</a>
            <a href="#">Algemene voorwaarden</a>
            <a href="#">Cookiebeleid</a>
        </div>
    </footer>
</body>

</html>