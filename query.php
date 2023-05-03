<?php

if (!isset($_GET['nama']) && !isset($_GET['kelas']) || $_GET['nama'] == '' || $_GET['kelas'] == '') {
    http_response_code(400);
    echo "Nama dan Kelas dibutuhkan, silahkan query param di url dengan key nama dan kelas";
    exit;
}

$say = "Hello " . htmlspecialchars($_GET['nama']) . " " . htmlspecialchars($_GET['kelas']);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Parameter</title>
</head>

<body>
    <h2><?= $say ?></h2>
</body>

</html>