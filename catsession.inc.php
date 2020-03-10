<?php
session_start();
include 'catsession2.inc.php';
include 'catsession3.inc.php';
$value = 0;

if (isset($_POST['catsubmit']) && $value < 1) {
    $_SESSION['namecat'] = $_POST['namecat'];
    $_SESSION['racecat'] = $_POST['racecat'];
    $_SESSION['datelastdiffgroomercat'] = $_POST['datelastdiffgroomercat'];
    $value = 1;
    header('Location: afspreken.php');
}
