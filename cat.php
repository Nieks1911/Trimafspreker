<?php
include 'catsession.inc.php';
include 'header.php';

if (!empty($_SESSION['namecat'])) {
    include 'catsession2.inc.php';
}
if (!empty($_SESSION['namecat2'])) {
    include 'catsession3.inc.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>topnav</title>
</head>
<body>
<style>
    .topnav {
        background-color: #339933;
        overflow: hidden;
    }
    .topnav a {
        float: left;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background: #ffd480;
        color: black;
    }
    .topnav a.active {
        background-color: green;
        color: white;
    }
</style>
<div class="topnav">
    <a href="index.php">Home</a>
    <a class="active" href="afspreken.php">Afspreken</a>
</div>

<h1>KAT TOEVOEGEN</h1>
<form action="cat.php" method="POST">
    Naam:<br>
    <input type="text" name="namecat" required><br>
    Ras:<br>
    <input type="text" name="racecat" required><br>
    Wanneer is deze kat voor het laatste bij een andere trimsalon geweest?<br>
    <input type="date" name="datelastdiffgroomercat" required><br>
    <input type="submit" name="catsubmit" value="Toevoegen">
</form>

</body>
</html>

