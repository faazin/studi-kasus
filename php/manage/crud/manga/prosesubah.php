<?php
include_once("../../../koneksi.php");

$id = $_GET["id"];

$manga_title = $_POST['manga_title'];
$author = $_POST['author'];
$gambar = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = '../../../../img/cover/';
$start_year = $_POST['start_year'];
$end_year = $_POST['end_year'];

move_uploaded_file($source, $folder.$gambar);

$result = mysqli_query($conn, "UPDATE `manga` SET manga_title='$manga_title',author='$author',gambar='$gambar',start_year='$start_year', end_year='$end_year' WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:../../../index.php");
?>