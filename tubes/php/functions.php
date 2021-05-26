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

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // Ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //         alert('Pilih gambar terlebih dahulu!');
        //       </script>";
        return 'nophoto.jpg';
    }

    // Cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('Yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // Cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    // Cek ukuran filw
    // Maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran terlalu besar!');
              </script>";
        return false;
    }

    // Lolos pengecekan
    // Siap upload file
    // Generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

// Fungsi untuk menambahkan data di database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $anime = htmlspecialchars($data['anime']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $rilis = htmlspecialchars($data['rilis']);
    // $img = htmlspecialchars($data['img']);

    // Upload gambar 
    $img = upload();
    if (!$img) {
        return false;
    }

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
    $nama = htmlspecialchars($data['nama']);
    $anime = htmlspecialchars($data['anime']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $rilis = htmlspecialchars($data['rilis']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $img = upload();
    if (!$img) {
        return false;
    }

    if ($img == 'nophoto.jpg') {
        $img = $gambar_lama;
    }

    $query = "UPDATE anime SET
                nama = '$nama',
                anime = '$anime',
                pengarang = '$pengarang',
                rilis = '$rilis',
                img = '$img'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM anime WHERE
                nama LIKE '%$keyword%' OR
                anime LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%' OR
                rilis LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan');
              </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>