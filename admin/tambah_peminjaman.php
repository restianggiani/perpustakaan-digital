<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_buku.php" method="post">
            <div class="from-group">
					<label>Peminjaman </label>
					<input type="text" class="from-control" name="PeminjamanID ">
				</div>
                <div class="from-group">
					<label>User </label>
					<input type="text" class="from-control" name="UserID ">
				</div>
                <div class="from-group">
					<label>Buku </label>
					<input type="text" class="from-control" name="BukuID ">
				</div>
				<div class="from-group">
					<label>TanggalPeminjaman</label>
					<input type="text" class="from-control" name="TanggalPeminjaman">
				</div>
				<div class="from-group">
					<label>TanggalPengembalian</label>
					<input type="text" class="from-control" name="TanggalPengembalian">
				</div>
				<div class="from-group">
					<label>StatusPeminjaman</label>
					<input type="text" class="from-control" name="StatusPeminjaman">
				</div>
				<div class="from-group">
					<button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>