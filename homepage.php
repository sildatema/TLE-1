<?php

/** @var $db */
require_once "database.php";

$query = "SELECT * FROM Statistics";

$result = mysqli_query($db,$query)
or die('Error '.mysqli_error($db).' with query '.$query);

$Statistics = [];

while($row = mysqli_fetch_assoc($result))
{
    $Statistics[] = $row;
}

mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>house market</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>