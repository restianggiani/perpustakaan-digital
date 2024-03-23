<?php
include'header.php';
?>
<!-- Navbar -->
<!-- tabel status -->
<h2 class="text-center sm mt-3"  ><b>Laporan Perpustakaan</b></h2>
<hr>
<!-- <table  class="table"> -->
<!-- <tr> -->
	<!-- <th> -->
<!-- <div class="content"> --> 
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Dari Tanggal</label> -->
			<!-- <input type="date" name="#"> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- <th> -->
<!-- <div class="content"> -->
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Ke Tanggal</label> -->
			<!-- <input type="date" name="#"> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- <th> -->
<!-- <div class="content"> -->
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Status</label> -->
			<!-- <select> -->
				<!-- <option value="All">All</option> -->
                <!-- <option value="#">Peminjaman</option> -->
                <!-- <option value="#">Pengembalian</option> -->
			<!-- </select> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- </tr> -->
<!-- </table> -->

<div style='overflow-y: scroll; height: 425px'>
	<a href="tambah_peminjam.php" class="btn-primary"></a>
    <table class="table">
        <thead class="bg-primary bg-gradient">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
            </tr>
        </thead>
    <tbody>
					<?php 
					include '../koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select * from peminjaman");
					while($d = mysqli_fetch_array($data)){
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d['User']; ?></td>
								<td><?php echo $d['Buku']; ?></td>
								<td><?php echo $d['TanggalPeminjaman']; ?></td>
								<td><?php echo $d['TanggalPengembalian']; ?></td>
								<td>
								</td>
							</tr>
						<?php } ?>
					</tbody>
	</table>
</div>
	<?php
	include 'footer.php';
	?>
	<script>
		window.print()
	</script>