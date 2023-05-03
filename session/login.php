<?php

session_start();

if (isset($_SESSION['login']) == true) {
    header("Location: /session/member.php");
    exit;
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == 'mizz' && $_POST['password'] == 'mizz') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'mizz kun';
        header("Location: /session/member.php");
        exit;
    } else {
        $error = 'Gagal Login';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h2><?= $error ?></h2>
    <form action="/session/login.php" method="post">
        <h2>Login Page</h2>
        <label> Username :
            <input type="text" name="username">
        </label>
        <br>
        <label> Password :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>