<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari from
$PeminjamanID = $_POST['PeminjamanID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];

mysqli_query($koneksi, "UPDATE peminjaman SET UserID='$UserID',BukuID='$BukuID',TanggalPeminjaman='$TanggalPeminjaman',
                        TanggalPengembalian='$TanggalPengembalian',StatusPeminjaman='$StatusPeminjaman' WHERE PeminjamanID='$PeminjamanID '");

//mengalihkan halaman kembali ke index.php
header("location:peminjaman.php?pesan=update");

?>