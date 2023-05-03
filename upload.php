<?php

$file_name = $_FILES['upload_file']['name'];
$file_type = $_FILES['upload_file']['type'];
$file_size = $_FILES['upload_file']['size'];
$file_tmp_name = $_FILES['upload_file']['tmp_name'];
$file_error = $_FILES['upload_file']['error'];

move_uploaded_file($file_tmp_name, __DIR__ . "/file/" . $file_name);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD FILE</title>
</head>

<body>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <h1>INFO FILE</h1>
        <table>
            <tr>
                <td>NAMA FILE :</td>
                <td> <?= $file_name ?> </td>
            </tr>
            <tr>
                <td>TYPE FILE :</td>
                <td> <?= $file_type ?> </td>
            </tr>
            <tr>
                <td>SIZE FILE :</td>
                <td> <?= $file_size ?> </td>
            </tr>
            <tr>
                <td>TMP NAME :</td>
                <td> <?= $file_tmp_name ?> </td>
            </tr>
            <tr>
                <td>ERROR FILE :</td>
                <td> <?= $file_error ?> </td>
            </tr>
        </table>

    <?php } ?>


    <h1>UPLOAD FILE</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>FILE : </label>

        <input type="file" name="upload_file">

        <input type="submit" name="upload" value="Upload">
    </form>
</body>

</html>