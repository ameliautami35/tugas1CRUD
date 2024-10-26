<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_sekolah");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);

    $query = "INSERT INTO mahasiswa (nim, nama) VALUES ('$nim', '$nama')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    
    if (mysqli_affected_rows($conn) > 0) {
        return true;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}


function update($data) {
    global $conn;

    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);

    $query = "UPDATE mahasiswa SET 
                nim = '$nim',
                nama = '$nama'
            WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?> 