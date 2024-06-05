<?php

$server = "localhost";
$user = 'root';
$pass = '';
$database = 'myweb';
$conn = new mysqli($server, $user, $pass, $database);

if ($conn) {
    mysqli_query($conn, "SET NAMES 'uf8' ");
} else {
    echo "Đã kết nối thất bại.";
}
