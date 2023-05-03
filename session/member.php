<?php

session_start();

if (isset($_SESSION['login']) != true) {
    header("Location: /session/login.php");
    exit;
}


$user = $_SESSION['username'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER AREA</title>
</head>

<body>
    <h1>MEMBER AREA</h1>

    <p>
        Selamat datang <?= $user ?>
    </p>

</body>

</html>