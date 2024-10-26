<?php
require 'functions.php';

// Cek apakah ada ID di URL
if (!isset($_GET["id"])) {
    echo "
    <script>
        alert('ID tidak ditemukan!');
        document.location.href = 'index.php';
    </script>";
    exit;
}

// Ambil data dari URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Mengecek apakah button submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek apakah data berhasil di-update atau tidak
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diupdate!');
            document.location.href = 'update.php?id=$id';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Mahasiswa</title>
    </head>
    <body>
        <h1>Update Data Mahasiswa</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>"><br><br>

            <label for="nim">NIM:</label><br>
            <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>"><br><br>

            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"><br><br>

            <button type="submit" name="submit">Update</button>
        </form>
    </body>
</html>
