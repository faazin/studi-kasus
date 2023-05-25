<?php
include_once("../../../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mangaId = $_POST["manga_id"];
    $genreId = $_POST["genre_id"];

    $queryMangaGenre = "INSERT INTO manga_genre (`manga_id`, `genre_id`) VALUES ('$mangaId', '$genreId')";
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>