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
		<h3>DAFTAR KEMATIAN
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>No</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>TANGGAL KEMATIAN</th>
					<th>SEBAB</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
			$sql_tampil = "SELECT p.id_pend, p.nik, p.nama, m.tgl_mendu, m.sebab, m.id_mendu from 
			tb_mendu m inner join tb_pdd p on p.id_pend=m.id_pdd";
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
						<?php echo $data['tgl_mendu']; ?>
					</td>
					<td>
						<?php echo $data['sebab']; ?>
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