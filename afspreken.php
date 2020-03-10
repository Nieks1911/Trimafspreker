<?php
include 'animaldateappsession.inc.php';
include 'header.php';

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

<form action="cat.php">
    <button>KAT</button>
</form>
<form action="smalldog.php">
    <button>KLEINE HOND</button>
</form>
<form action="bigdog.php">
    <button>GROTE HOND</button>
</form>
<form action="afspreken.php" method="POST">
    <div>
        <input type="date" name="animaldateapp">
        <input type="submit" name="appsubmit">
    </div>
</form>
</body>
</html>

