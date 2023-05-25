<?php
include_once("../../../koneksi.php");

$genre_id = $_GET["genre_id"];

$genre_name = $_POST['genre_name'];

$result = mysqli_query($conn, "UPDATE `genre` SET genre_name='$genre_name' WHERE genre_id='$genre_id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>