<?php
require 'functions.php';
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "web_sekolah");


//mengecek apakah button submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


    //cek apakah data berhasil di tambahkan atau tidak?
    if ( tambah($_POST)>0){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'insert_data.php';
        </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Insert Data Mahasiswa</title>
    </head>
    <body>
        <h1>Insert Data Mahasiswa</h1>

        <form action="" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" id="nim" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

        </form>
    </body>
</html>