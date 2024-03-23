<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari form
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

mysqli_query($koneksi, "update kategoribuku set NamaKategori='$NamaKategori' where KategoriID='$KategoriID'");

//mengalihkan halaman kembali ke index.php
header("location:kategori.php?pesan=update");

?>