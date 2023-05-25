<?php
include "koneksi.php";

$jumlahDataPerHalaman = 6;

$queryTotalData = "SELECT COUNT(*) AS total FROM manga";
$resultTotalData = mysqli_query($conn, $queryTotalData);
$totalData = mysqli_fetch_assoc($resultTotalData)['total'];

$jumlahHalaman = ceil($totalData / $jumlahDataPerHalaman);

$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;

$batasData = ($halamanAktif - 1) * $jumlahDataPerHalaman;

$queryData = "SELECT `manga`.`manga_title`, `manga`.`author`, `manga`.`gambar`, GROUP_CONCAT(`genre`.`genre_name` SEPARATOR ', ') AS 'genre' FROM `manga` JOIN `manga_genre` ON `manga`.`id` = `manga_genre`.`manga_id` JOIN `genre` ON `genre`.`genre_id` = `manga_genre`.`genre_id` GROUP BY `manga`.`id` LIMIT $batasData, $jumlahDataPerHalaman";
$resultData = mysqli_query($conn, $queryData);
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reading Comics</title>
    <link rel="icon" href="../img/R.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" style="font-size: x-large;" href="#">Re<strong class="fw-bold">Co.</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comic.php">Comics List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.html">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search Comics" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>

    <div class="container about">
        <div class="container text-center">
            <?php if (mysqli_num_rows($resultData) > 0) { ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php while ($data = mysqli_fetch_array($resultData)) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="../img/cover/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["manga_title"]; ?>" class="card-img-top">
                                <div class="card-body bp">
                                    <h4 class="card-title"><?php echo $data["manga_title"]; ?></h4>
                                    <p class="card-text">Author: <?php echo $data["author"]; ?></p>
                                    <p class="card-text">Genre: <?php echo $data["genre"]; ?></p>
                                    <a href="#" class="btn btn-primary btn-cl">Read Now!</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>


    <!-- Pagination -->
    <nav aria-label="Halaman">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $halamanAktif - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <li class="page-item <?php echo ($i == $halamanAktif) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $halamanAktif + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <footer class="footer-section" id="footer">
        <div class="container">
            <p>&copy; 2023 Created By. Fadlan Fauzi Muttaqin</p>
        </div>
    </footer>
</body>

</html>