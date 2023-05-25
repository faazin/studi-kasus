<?php
include "./koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM `manga_genre`");
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<form action="" class="mt-3" method="post">
    <table id="mage_table">
        <thead>
            <th>No</th>
            <th>Manga ID</th>
            <th>Genre ID</th>
            <th>Action</th>
        </thead>
        <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["manga_id"]; ?></td>
                    <td><?php echo $data["genre_id"]; ?></td>
                    <td>
                        <!-- <a href="../manage/crud/mage/ubah.php">Edit</a> -->
                        <a href="../../../manage/crud/mage/hapus.php" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php $no++;
            } ?>
        <?php } ?>
    </table>
</form>
<script>
    $(document).ready(function() {
        $('#mage_table').DataTable();
    });
</script>