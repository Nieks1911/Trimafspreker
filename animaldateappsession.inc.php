<?php
session_start();

if(isset($_POST['appsubmit'])) {
    $_SESSION['animaldateapp'] = $_POST['animaldateapp'];
    header('Location: contactform.php');
}