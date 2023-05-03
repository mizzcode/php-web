<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="todolist-app-close.png"');
    header('Content-Type: image/jpg');
    readdir(__DIR__ . '/file/todolist-app-close.png');
} else {
    echo "Gagal";
}
