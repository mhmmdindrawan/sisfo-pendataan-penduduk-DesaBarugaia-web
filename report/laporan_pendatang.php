<?php
include "../inc/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
</head>
<center>
	<table border="0" cellspacing="0" style="width:480px;">
		<tbody>
			<tr>
				<td style="line-height:30px;" style="text-align:center;" style="margin:8px 30px 8px 20px;">
					<center>
						<h1>LAPORAN SIPANDU DESA</h1>
					</center>
				</td>
			</tr>
		</tbody>
	</table>
</center>

<body>
	<center>
		<hr / size="2px" color="black">
		<br>
		<h3>DAFTAR PENDATANG BARU
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>JEKEL</th>
					<th>TANGGAL</th>
					<th>PELAPOR</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
            $sql_tampil = "SELECT d.id_datang, d.nik, d.nama_datang, d.jekel, d.tgl_datang, p.nama from 
			tb_datang d inner join tb_pdd p on d.pelapor=p.id_pend";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $data['nik']; ?>
					</td>
					<td>
						<?php echo $data['nama_datang']; ?>
					</td>
					<td>
						<?php echo $data['jekel']; ?>
					</td>
					<td>
						<?php echo $data['tgl_datang']; ?>
					</td>
					<td>
						<?php echo $data['nama']; ?>
					</td>
				</tr>
				<?php
            $no++;
            }
        ?>
			</tbody>
		</table>
	</center>

	<script>
		window.print();
	</script>
</body>

</html>