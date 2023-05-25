<?php
include_once("../../../koneksi.php");

$genre_name = $_POST['genre_name'];

$result = mysqli_query($conn, "INSERT INTO `genre` (`genre_name`) VALUES ('$genre_name')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>