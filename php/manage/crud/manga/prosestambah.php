<?php
include_once("../../../koneksi.php");

$manga_title = $_POST['manga_title'];
$author = $_POST['author'];
$gambar = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = '../../../../img/cover/';
$start_year = $_POST['start_year'];
$end_year = $_POST['end_year'];

move_uploaded_file($source, $folder.$gambar);

$result = mysqli_query($conn, "INSERT INTO `manga` (`manga_title`,`author`,`gambar`,`start_year`, `end_year`) VALUES ('$manga_title','$author','$gambar','$start_year','$end_year')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>