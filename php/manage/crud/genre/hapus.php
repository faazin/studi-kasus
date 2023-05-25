<?php

include_once "../../../koneksi.php";

$genre_id = $_GET["genre_id"];

$result = mysqli_query($conn, "DELETE FROM `genre` WHERE `genre_id`='$genre_id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>