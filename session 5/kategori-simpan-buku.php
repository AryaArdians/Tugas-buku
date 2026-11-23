<?php
require_once 'koneksi.php';

$kategori = $_POST['kategori'];

$sql = "INSERT INTO tb_kategori_buku (kategori_buku)
        VALUES ('$kategori')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
            alert('Kategori berhasil ditambahkan!');
            window.location='kategori_buku.php';
          </script>";
} else {
    echo "<script>
            alert('Kategori gagal ditambahkan!');
            window.location='kategori_buku.php';
          </script>";
}
?>