<?php
require 'functions.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "<script>
        alert('Data Berhasil dihapus!');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus!');
        window.location.href = 'index.php';
    </script>";
}
?>
