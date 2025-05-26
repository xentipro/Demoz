<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "shop_inventory1";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>