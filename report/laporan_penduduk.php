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
		<h3>DAFTAR PENDUDUK
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>TTL</th>
					<th>JEKEL</th>
					<th>ALAMAT</th>
					<th>AGAMA</th>
					<th>NIKAH</th>
					<th>PEKERJAAN</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
            $sql_tampil = "select * from tb_pdd order by nama asc";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
				<tr>
					<td align="center">
						<?php echo $no; ?>
					</td>
					<td>
						<?php echo $data['nik']; ?>
					</td>
					<td>
						<?php echo $data['nama']; ?>
					</td>
					<td>
						<?php echo $data['tempat_lh']; ?>/
						<?php echo $data['tgl_lh']; ?>
					</td>
					<td align="center">
						<?php echo $data['jekel']; ?>
					</td>
					<td>
						<?php echo $data['desa']; ?>/ RT
						<?php echo $data['rt']; ?>/ RW
						<?php echo $data['rw']; ?>
					</td>
					<td>
						<?php echo $data['agama']; ?>
					</td>
					<td>
						<?php echo $data['kawin']; ?>
					</td>
					<td>
						<?php echo $data['pekerjaan']; ?>
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