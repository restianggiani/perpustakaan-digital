<?php
session_start();

// cek apakah yang mengaksses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:../index.php?pesan=info_login");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
