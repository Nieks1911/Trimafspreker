<?php
session_start();
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

<h1>CONTACT INFORMATIE</h1>
<form action="insertdb.php" method="POST">
    <div>
        <input type="radio" name="gender" value="M" required /> Dhr
    </div>
    <div>
        <input type="radio" name="gender" value="F" required /> Mevr
    </div>
    <div>
        <input type="text" name="firstname" placeholder="Voornaam *" required>
    </div>
    <div>
        <input type="text" name="lastname" placeholder="Achternaam *" required>
    </div>
    <div>
        <input type="email" name="email" placeholder="E-Mail *" required>
    </div>
    <div>
        <input type="tel" name="tel" placeholder="Telefoonnummer *" required>
    </div>
    <button type="submit" name="contactformsubmit">Volgende</button>
</form>

</body>
</html>