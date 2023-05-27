<?php
include_once("../../../koneksi.php");
$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM `manga` WHERE id='$id'");

while ($manga = mysqli_fetch_array($query)) {
    $manga_title = $manga['manga_title'];
    $author = $manga['author'];
    $gambar = $manga['gambar'];
    $start_year = $manga['start_year'];
    $end_year = $manga['end_year'];
}
?>

<head>
    <title>Management Reading Comics</title>
    <link rel="icon" href="../../../../img/R.png">
    <link rel="stylesheet" href="../../../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;1,700&display=swap" rel="stylesheet">
</head>

<div class="container about p-5">
    <h4 class="ms-4">Update Data Manga</h4>
    <form action="prosesubah.php?id=<?php echo $id ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Manga Title</label>
            <input type="text" class="form-control" name="manga_title" value="<?php echo $manga_title ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" name="author" value="<?php echo $author ?>">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Gambar</label>
            <img src="../../../../img/cover/<?php echo $gambar ?>" alt="" class="form-control" style="width: 20vh !important;">
            <input type="file" class="form-control" name="gambar" value="<?php echo $gambar ?>">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Start Year</label>
            <input type="number" class="form-control" name="start_year" value="<?php echo $start_year ?>">
        </div>
        <div class="mb-3 ">
            <label class="form-label">End Year</label>
            <input type="number" class="form-control" name="end_year" value="<?php echo $end_year ?>">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>