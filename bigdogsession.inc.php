<?php
session_start();

if (isset($_POST['bigdogsubmit'])) {
    $_SESSION['namebigdog'] = $_POST['namebigdog'];
    $_SESSION['racebigdog'] = $_POST['racebigdog'];
    $_SESSION['datelastdiffgroomerbigdog'] = $_POST['datelastdiffgroomerbigdog'];
    header('Location: afspreken.php');
}