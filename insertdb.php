<?php
session_start();

include 'db_connection.php';

//INSERT CATS
//CAT 1
if (isset($_POST['contactformsubmit']) && isset($_SESSION['namecat'])) {
    $gender = mysqli_real_escape_string($db, htmlentities( $_POST['gender']));
    $firstName = mysqli_real_escape_string($db, htmlentities($_POST['firstname']));
    $lastName = mysqli_real_escape_string($db, htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($db, htmlentities($_POST['email']));
    $tel = mysqli_real_escape_string($db, htmlentities($_POST['tel']));

    $catType = "Kat";
    $nameCat = mysqli_real_escape_string($db, htmlentities($_SESSION['namecat']));
    $raceCat = mysqli_real_escape_string($db, htmlentities($_SESSION['racecat']));
    $dateLastDiffGroomerCat = mysqli_real_escape_string($db, htmlentities($_SESSION['datelastdiffgroomercat']));
    $animalDateApp = mysqli_real_escape_string($db, htmlentities($_SESSION['animaldateapp']));


    $sql = "INSERT INTO appointment (Gender, FirstName, LastName, Email, Tel, AnimalType, AnimalRace, AnimalName, AnimalDateLastDiffGroomer, AnimalDateApp)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $gender, $firstName, $lastName, $email, $tel, $catType, $raceCat, $nameCat, $dateLastDiffGroomerCat, $animalDateApp);
        mysqli_stmt_execute($stmt);
    }
}

//CAT 2
if (isset($_POST['contactformsubmit']) && isset($_SESSION['namecat2'])) {
    $gender = mysqli_real_escape_string($db, htmlentities( $_POST['gender']));
    $firstName = mysqli_real_escape_string($db, htmlentities($_POST['firstname']));
    $lastName = mysqli_real_escape_string($db, htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($db, htmlentities($_POST['email']));
    $tel = mysqli_real_escape_string($db, htmlentities($_POST['tel']));

    $catType = "Kat";
    $nameCat = mysqli_real_escape_string($db, htmlentities($_SESSION['namecat2']));
    $raceCat = mysqli_real_escape_string($db, htmlentities($_SESSION['racecat2']));
    $dateLastDiffGroomerCat = mysqli_real_escape_string($db, htmlentities($_SESSION['datelastdiffgroomercat2']));
    $animalDateApp = mysqli_real_escape_string($db, htmlentities($_SESSION['animaldateapp']));


    $sql = "INSERT INTO appointment (Gender, FirstName, LastName, Email, Tel, AnimalType, AnimalRace, AnimalName, AnimalDateLastDiffGroomer, AnimalDateApp)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $gender, $firstName, $lastName, $email, $tel, $catType, $raceCat, $nameCat, $dateLastDiffGroomerCat, $animalDateApp);
        mysqli_stmt_execute($stmt);
    }
}

//CAT 3
if (isset($_POST['contactformsubmit']) && isset($_SESSION['namecat3'])) {
    $gender = mysqli_real_escape_string($db, htmlentities( $_POST['gender']));
    $firstName = mysqli_real_escape_string($db, htmlentities($_POST['firstname']));
    $lastName = mysqli_real_escape_string($db, htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($db, htmlentities($_POST['email']));
    $tel = mysqli_real_escape_string($db, htmlentities($_POST['tel']));

    $catType = "Kat";
    $nameCat = mysqli_real_escape_string($db, htmlentities($_SESSION['namecat3']));
    $raceCat = mysqli_real_escape_string($db, htmlentities($_SESSION['racecat3']));
    $dateLastDiffGroomerCat = mysqli_real_escape_string($db, htmlentities($_SESSION['datelastdiffgroomercat3']));
    $animalDateApp = mysqli_real_escape_string($db, htmlentities($_SESSION['animaldateapp']));


    $sql = "INSERT INTO appointment (Gender, FirstName, LastName, Email, Tel, AnimalType, AnimalRace, AnimalName, AnimalDateLastDiffGroomer, AnimalDateApp)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $gender, $firstName, $lastName, $email, $tel, $catType, $raceCat, $nameCat, $dateLastDiffGroomerCat, $animalDateApp);
        mysqli_stmt_execute($stmt);
    }
}

if (isset($_POST['contactformsubmit']) && isset($_SESSION['namesmalldog'])) {
    $gender = mysqli_real_escape_string($db, htmlentities( $_POST['gender']));
    $firstName = mysqli_real_escape_string($db, htmlentities($_POST['firstname']));
    $lastName = mysqli_real_escape_string($db, htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($db, htmlentities($_POST['email']));
    $tel = mysqli_real_escape_string($db, htmlentities($_POST['tel']));

    $smallDogType = "Kleine hond";
    $nameSmallDog = mysqli_real_escape_string($db, htmlentities($_SESSION['namesmalldog']));
    $raceSmallDog = mysqli_real_escape_string($db, htmlentities($_SESSION['racesmalldog']));
    $dateLastDiffGroomerSmallDog = mysqli_real_escape_string($db, htmlentities($_SESSION['datelastdiffgroomersmalldog']));
    $animalDateApp = mysqli_real_escape_string($db, htmlentities($_SESSION['animaldateapp']));


    $sql = "INSERT INTO appointment (Gender, FirstName, LastName, Email, Tel, AnimalType, AnimalRace, AnimalName, AnimalDateLastDiffGroomer, AnimalDateApp)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $gender, $firstName, $lastName, $email, $tel, $smallDogType, $raceSmallDog, $nameSmallDog, $dateLastDiffGroomerSmallDog, $animalDateApp);
        mysqli_stmt_execute($stmt);
    }
}

if (isset($_POST['contactformsubmit']) && isset($_SESSION['namebigdog'])) {
    $gender = mysqli_real_escape_string($db, htmlentities( $_POST['gender']));
    $firstName = mysqli_real_escape_string($db, htmlentities($_POST['firstname']));
    $lastName = mysqli_real_escape_string($db, htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($db, htmlentities($_POST['email']));
    $tel = mysqli_real_escape_string($db, htmlentities($_POST['tel']));

    $bigDogType = "Grote hond";
    $nameBigDog = mysqli_real_escape_string($db, htmlentities($_SESSION['namebigdog']));
    $raceBigDog = mysqli_real_escape_string($db, htmlentities($_SESSION['racebigdog']));
    $dateLastDiffGroomerBigDog = mysqli_real_escape_string($db, htmlentities($_SESSION['datelastdiffgroomerbigdog']));
    $animalDateApp = mysqli_real_escape_string($db, htmlentities($_SESSION['animaldateapp']));


    $sql = "INSERT INTO appointment (Gender, FirstName, LastName, Email, Tel, AnimalType, AnimalRace, AnimalName, AnimalDateLastDiffGroomer, AnimalDateApp)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($db);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        var_dump($stmt);
        exit;
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $gender, $firstName, $lastName, $email, $tel, $bigDogType, $raceBigDog, $nameBigDog, $dateLastDiffGroomerBigDog, $animalDateApp);
        mysqli_stmt_execute($stmt);
    }
}
session_destroy();

header('Location: afspreken.php');