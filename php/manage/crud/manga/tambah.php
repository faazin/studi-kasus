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
        <h4 class="ms-4">Add Data Manga</h4>
        <form action="prosestambah.php" method="post" class="px-auto py-auto" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Manga Title</label>
                <input type="text" class="form-control" name="manga_title">
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="mb-3 ">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="mb-3 ">
                <label class="form-label">Start Year</label>
                <input type="number" class="form-control" name="start_year">
            </div>
            <div class="mb-3 ">
                <label class="form-label">End Year</label>
                <input type="number" class="form-control" name="end_year">
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