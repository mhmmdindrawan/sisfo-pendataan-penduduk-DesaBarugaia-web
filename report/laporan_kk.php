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
		<h3>DAFTAR KARTU KELUARGA
		</h3>

		<table border="1" cellspacing="0" style="width: 100%">
			<thead>
				<tr>
					<th>NO</th>
					<th>NO KK</th>
					<th>KPL KELUARGA</th>
					<th>ALAMAT</th>
					<th>RT</th>
					<th>RW</th>
					<th>KEC</th>
					<th>KAB</th>
					<th>PROVINSI</th>
				</tr>
			</thead>
			<tbody>
				<?php

            $no=1;
            $sql_tampil = "select * from tb_kk order by kepala asc";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
				<tr>
					<td align="center">
						<?php echo $no; ?>
					</td>
					<td>
						<?php echo $data['no_kk']; ?>
					</td>
					<td>
						<?php echo $data['kepala']; ?>
					</td>
					<td>
						<?php echo $data['desa']; ?>
					</td>
					<td>
						<?php echo $data['rt']; ?>
					</td>
					<td>
						<?php echo $data['rw']; ?>
					</td>
					<td>
						<?php echo $data['kec']; ?>
					</td>
					<td>
						<?php echo $data['kab']; ?>
					</td>
					<td>
						<?php echo $data['prov']; ?>
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