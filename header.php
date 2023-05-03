<?php

header('Application: PHP WEB');
header('Author: Mizz');

$client = $_SERVER['HTTP_CLIENT_NAME'];

$nama = $_GET['nama'];

echo "Hello $client <br>";
echo "Selamat datang $nama <br>";
