<?php
include 'header.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<div class="content mt-3">
		<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead>?>
			<a href="tambah_peminjaman.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
			<table class="table">
				<thead>

								<tr>
									<th>#</th>
									<th>ID PEMINJAMAN</th>
									<th>NAMA</th>
									<th>JUDUL</th>
									<th>TANGGAL PEMINJAMAN</th>
									<th>TANGGAL PENGEMBALIAN</th>
									<th>STATUS PEMINJAMAN</th>
									<th>AKSI</th>
								</tr>
								</tr>
							</thead>
							<tbody>
								<?php
								include "../koneksi.php";
								$no = 1;
								$sql = "SELECT * FROM peminjaman
                                        INNER JOIN user ON peminjaman.UserID = user.UserID
                                        INNER JOIN buku ON peminjaman.BukuID = buku.BukuID
                                        ";
								$query = mysqli_query($koneksi, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['PeminjamanID']; ?></td>
										<td><?php echo $row['NamaLengkap']; ?></td>
										<td><?php echo $row['Judul']; ?></td>
										<td><?php echo $row['TanggalPeminjaman']; ?></td>
										<td><?php echo $row['TanggalPengembalian']; ?></td>
										<td><?php echo $row['StatusPeminjaman']; ?></td>
										<td>
											<a href="edit_peminjaman.php?PeminjamanID=<?php echo $row["PeminjamanID"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
											<a href="proses_hapus_peminjaman.php?PeminjamanID=<?php echo $row["PeminjamanID"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
										</td>
									</tr>

								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
	<?php
	include "footer.php";
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>