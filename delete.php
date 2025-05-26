<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM snacks WHERE id = $id");

header("Location: index.php");
?>