<?php
include "./koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM `genre`");
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<form action="" class="mt-3" method="post">
    <table id="GenTable">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["genre_name"]; ?></td>
                    <td>
                        <a href="./manage/crud/genre/ubah.php?genre_id=<?php echo $data["genre_id"] ?>">Edit</a>
                        <a href="./manage/crud/genre/hapus.php?genre_id=<?php echo $data["genre_id"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php $no++;
            } ?>
        <?php } ?>
    </table>
</form>
<script>
    $(document).ready(function() {
        $('#GenTable').DataTable();
    });
</script>