<?php
include_once("../../../koneksi.php");
$id = $_GET["genre_id"];

$query = mysqli_query($conn, "SELECT * FROM `genre` WHERE `genre_id`='$id'");

while ($genre = mysqli_fetch_array($query)) {
    $genre_name = $genre['genre_name'];
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
    <h4 class="ms-4">Add Data Genre</h4>
    <form action="prosesubah.php?genre_id=<?php echo $id ?>" method="post" class="px-auto py-auto">
        <div class="mb-3">
            <label class="form-label">Genre Name</label>
            <input type="text" class="form-control" name="genre_name" value="<?php echo $genre_name ?>">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>

<footer class="footer-section" id="footer">
    <div class="container">
        <p>&copy; 2023 Created By. Fadlan Fauzi Muttaqin</p>
    </div>
</footer>