<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
// Fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040045");

    return $conn;
}

// Function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk menambahkan data di database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $anime = htmlspecialchars($data['anime']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $rilis = htmlspecialchars($data['rilis']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO anime
                        VALUES
                        ('', '$img', '$nama', '$anime', '$pengarang', '$rilis')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi untuk menghapus data di database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengubah data di database
function ubah($data)
{

    $conn = koneksi();
    $id = ($data['id']);
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $anime = htmlspecialchars($data['anime']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $rilis = htmlspecialchars($data['rilis']);

    $query = "UPDATE anime SET
                    img = '$img',
                    nama = '$nama',
                    anime = '$anime',
                    pengarang = '$pengarang',
                    rilis = '$rilis'
                    WHERE id = '$id'
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>