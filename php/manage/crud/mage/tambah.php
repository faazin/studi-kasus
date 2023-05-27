<?php
include "../../../koneksi.php";

$queryManga = "SELECT * FROM manga";
$resultManga = $conn->query($queryManga);

$queryGenre = "SELECT * FROM genre";
$resultGenre = $conn->query($queryGenre);

?>

<html>

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

<body>
    <div class="container about p-5">
        <h4 class="ms-4">Add Data Manga Genre</h4>
        <form action="prosestambah.php" method="post" class="px-auto py-auto" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Manga</label>
                <select class="form-control" name="manga_title">
                    <?php

                    if ($resultManga->num_rows > 0) {

                        while ($rowManga = $resultManga->fetch_assoc()) {
                            $mangaId = $rowManga["id"];
                            $mangaTitle = $rowManga["manga_title"];
                            echo '<option value="' . $mangaId . '">' . $mangaTitle . '</option>';
                        }
                    } else {
                        echo '<option value="">No manga available</option>';
                    }

                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <select class="form-control" name="genre_name[]" multiple>
                    <?php

                    if ($resultGenre->num_rows > 0) {

                        while ($rowGenre = $resultGenre->fetch_assoc()) {
                            $genreId = $rowGenre["genre_id"];
                            $genreName = $rowGenre["genre_name"];
                            echo '<option value="' . $genreId . '">' . $genreName . '</option>';
                        }
                    } else {
                        echo '<option value="">No genre available</option>';
                    }

                    ?>
                </select>
                <div class="form-text">* Use the ctrl key to select more than 1 genre</div>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>

<footer class="footer-section" id="footer">
    <div class="container">
        <p>&copy; 2023 Created By. Fadlan Fauzi Muttaqin</p>
    </div>
</footer>

</html>