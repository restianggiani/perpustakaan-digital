<?php
// koneksi database
include "../koneksi.php";

$TanggalPeminjaman =$_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];

// meninput daa ke databas 
mysqli_query($koneksi,"INSERT INTO peminjaman values('','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman',')");

// mengalihkan halaman kembali ke index.php
header("location:peminjaman.php?pesan+fagagal");
?>