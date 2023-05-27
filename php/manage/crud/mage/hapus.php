<?php
include '../../../koneksi.php';

$mangaId = $_GET["manga_id"];
$genreId = $_GET["genre_id"];

$result = mysqli_query($conn, "DELETE FROM `manga_genre` WHERE `manga_genre`.`manga_id` = '$mangaId' AND `manga_genre`.`genre_id` = $genreId");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>
