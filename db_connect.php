<?php

/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sppr";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Ошибка соединения: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}
?>