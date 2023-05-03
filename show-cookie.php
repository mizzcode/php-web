<?php

$cookie = $_COOKIE["Mizz-Cookie"];

$date = new DateTime();

$result = $date->format("d M Y H:i:s");

if ($result) {
    echo "Nama Cookie : $cookie <br> Waktu : " . $result;
} else {
    echo "Unknown Time";
}
