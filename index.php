<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id BETWEEN 31295 AND 31320");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="insert_data.php">Insert Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Id</th>
            <th>Action</th>
            <th>Nim</th>
            <th>Nama</th>
        </tr>

        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $row["id"];?></td>
            <td>
                <a href="update.php?id=<?= $row["id"]; ?>">Update</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus Data Berikut?');">Delete</a>
            </td>
            <td><?= $row["nim"];?></td>
            <td><?= $row["nama"];?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>