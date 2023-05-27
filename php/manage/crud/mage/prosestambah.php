<?php
include_once("../../../koneksi.php");

$mangaTitle = $_POST["manga_title"];
$genreIds = $_POST["genre_name"];

$genreIdsString = implode(",", $genreIds);
$queryMangaGenre = "INSERT INTO `manga_genre` (`manga_id`, `genre_id`) VALUES ";
$valueStrings = array();
foreach ($genreIds as $genreId) {
    $valueStrings[] = "('$mangaTitle', '$genreId')";
}
$queryMangaGenre .= implode(",", $valueStrings);

mysqli_query($conn, $queryMangaGenre);

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
