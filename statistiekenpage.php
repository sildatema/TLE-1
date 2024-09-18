<?php

/** @var $db */
require_once "database-connection.php";

$query = "SELECT * FROM tuesday";

$result = mysqli_query($db,$query)
or die('Error '.mysqli_error($db).' with query '.$query);

$Statistics = [];

while($row = mysqli_fetch_assoc($result))
{
    $Statistics = $row;
}
$DayOfWeekNumber = date("w");
print_r("$DayOfWeekNumber");
print_r($Statistics);
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
        <div class="nav-left">
            <a href="homepage.php">Informatie</a>
        </div>

        <div class="nav-logo">
            <img src="logo">
        </div>

        <div class="nav-right">
            <a href="statistiekenpage.php">Statistieken</a>
        </div>
    </nav>

    <h1>Statistieken</h1>

    <section>
        <div generated-energy>
            <div>
                <img src="plaatje">
            </div>
            <div>
                <p>Opgewekte energie</p>
            </div>
            <div>
                <p><?= $energyGenerated?></p>
            </div>
        </div>

        <div consumed-energy>
            <div>
                <img src="plaatje">
            </div>
            <div>
                <p>Verbruikte energie</p>
            </div>
            <div>
                <p><?= $energyConsumed?></p>
            </div>
        </div>

        <div sun-hours>
            <div>
                <img src="plaatje">
            </div>
            <div>
                <p>Zonuren</p>
            </div>
            <div>
                <p><?= $sunHours?></p>
            </div>
        </div>

        <div best-energy-yield>
            <div>
                <img src="plaatje">
            </div>
            <div>
                <p>Beste energie opbrengst</p>
            </div>
            <div>
                <p><?= $bestYield?></p>
            </div>
        </div>

        <div euro-saved>
            <div>
                <img src="plaatje">
            </div>
            <div>
                <p>Euro's bespaard</p>
            </div>
            <div>
                <p><?= $dollarSaved?></p>
            </div>
        </div>
    </section>
  

    <footer>
        <div class="footer-logo">
            <img src="logo">
    
        </div>
    
        <div class="footer">
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Contact</a>
        </div>
    </footer>
</body>

</html>
