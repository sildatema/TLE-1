<?php

// General settings
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "forsale";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());
