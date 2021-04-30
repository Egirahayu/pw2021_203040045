<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    // Fungsi untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040045");

        return $conn;
    }

    // Function untuk melakukan query dan memasukkannya kedalam array
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Fungsi untuk menambahkan data di database
    function tambah($data) {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $anime = htmlspecialchars($data['anime']);
        $rilis = htmlspecialchars($data['rilis']);
        $status = htmlspecialchars($data['status']);
        $img = htmlspecialchars($data['img']);

        $query = "INSERT INTO anime
                        VALUES
                        ('', '$img', '$nama', '$anime', '$rilis', '$status')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk menghapus data di database
    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk mengubah data di database
    function ubah($data) {

        $conn = koneksi();
        $id = ($data['id']);
        $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $anime = htmlspecialchars($data['anime']);
        $rilis = htmlspecialchars($data['rilis']);
        $status = htmlspecialchars($data['status']);

        $query = "UPDATE anime SET
                img = '$img',
                nama = '$nama',
                anime = '$anime',
                rilis = '$rilis',
                status = '$status'
                WHERE id = '$id'
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM anime WHERE
                nama LIKE '%$keyword%' OR
                anime LIKE '%$keyword%' OR
                rilis LIKE '%$keyword%' OR
                status LIKE '%$keyword%' 
                ";
        return query($query);
    }
?>