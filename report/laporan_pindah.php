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
		<h3>DAFTAR PENDUDUK PINDAH
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>TANGGAL</th>
					<th>ALASAN</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
            $sql_tampil = "SELECT p.id_pend, p.nik, p.nama, d.tgl_pindah, d.alasan, d.id_pindah from 
			tb_pindah d inner join tb_pdd p on p.id_pend=d.id_pdd";
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
						<?php echo $data['nama']; ?>
					</td>
					<td>
						<?php echo $data['tgl_pindah']; ?>
					</td>
					<td>
						<?php echo $data['alasan']; ?>
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