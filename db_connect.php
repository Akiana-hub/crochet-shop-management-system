<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$database = "crochet_shop_db";

$conn = mysqli_connect($servername, $db_username, $db_password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>