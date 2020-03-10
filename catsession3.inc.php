<?php

if (isset($_POST['catsubmit']) && $value = 2) {
    $_SESSION['namecat3'] = $_POST['namecat'];
    $_SESSION['racecat3'] = $_POST['racecat'];
    $_SESSION['datelastdiffgroomercat3'] = $_POST['datelastdiffgroomercat'];
    header('Location: afspreken.php');
    $value = 3;
}
