<?php
session_start();

if (isset($_POST['smalldogsubmit'])) {
    $_SESSION['namesmalldog'] = $_POST['namesmalldog'];
    $_SESSION['racesmalldog'] = $_POST['racesmalldog'];
    $_SESSION['datelastdiffgroomersmalldog'] = $_POST['datelastdiffgroomersmalldog'];
    header('Location: afspreken.php');
}
