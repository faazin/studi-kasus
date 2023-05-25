<html>

<head>
    <title>Management Reading Comics</title>
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
    <nav class="navbar navbar-expand-lg">
        <div class="container br">
            <a class="navbar-brand" href="#">Management CRUD</a>
            <button class="navbar-toggler bt" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Add Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="manage/crud/manga/tambah.php" target="_blank">Data Manga</a></li>
                            <li><a class="dropdown-item" href="manage/crud/genre/tambah.php" target="_blank">Data Genre</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="manage/crud/mage/tambah.php" target="_blank">Data Manga Genre</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-3 mb-5 bg-dark">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active mc" data-bs-toggle="tab" data-bs-target="#ex1-tabs-1" type="button" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Data Manga</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link mc" data-bs-toggle="tab" data-bs-target="#ex1-tabs-2" type="button" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Data Genre</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link mc" data-bs-toggle="tab" data-bs-target="#ex1-tabs-3" type="button" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">Data Manga Genre</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tabs-1" tabindex="0"><?php include "manage/manga.php" ?></div>
            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tabs-2" tabindex="0"><?php include "manage/genre.php" ?></div>
            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tabs-3" tabindex="0"><?php include "manage/mage.php" ?></div>
        </div>
    </div>
</body>

<footer class="footer-section" id="footer">
    <div class="container">
        <p>&copy; 2023 Created By. Fadlan Fauzi Muttaqin</p>
    </div>
</footer>

</html>