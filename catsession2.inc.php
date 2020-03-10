<?php

if (isset($_POST['catsubmit']) && $value = 1) {
    $_SESSION['namecat2'] = $_POST['namecat'];
    $_SESSION['racecat2'] = $_POST['racecat'];
    $_SESSION['datelastdiffgroomercat2'] = $_POST['datelastdiffgroomercat'];
    $value = 2;
    header('Location: afspreken.php');
}
