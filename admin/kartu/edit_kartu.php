<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kk WHERE id_kk='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-3">
					<input type='text' class="form-control" id="id_kk" name="id_kk" value="<?php echo $data_cek['id_kk']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No KK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_kk" name="no_kk" value="<?php echo $data_cek['no_kk']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kpl Keluarga</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kepala" name="kepala" value="<?php echo $data_cek['kepala']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					 required>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" value="<?php echo $data_cek['rw']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kec" name="kec" value="<?php echo $data_cek['kec']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kab" name="kab" value="<?php echo $data_cek['kab']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Provinsi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="prov" name="prov" value="<?php echo $data_cek['prov']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kartu Keluarga (KK)</label>
				<div class="col-sm-6">
					<input type="file" class="form-control" id="kaka" name="kaka"> *file JPG
				</div>

			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kartu" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){

	$acak = mt_rand(1000, 9999);
	$sumber = $_FILES["kaka"]["tmp_name"];
	$target_dir = "file_kaka";
	$temp = explode(".",$_FILES["kaka"]["name"]);
	$nama_baru = ("kk-".$acak).'.'.end($temp);

		if(!empty($sumber)){
			$kaka=$data_cek['kaka'];
			if (file_exists("file_kaka/$kaka")){
				unlink("file_kaka/$kaka");
			}
			
		move_uploaded_file($_FILES["kaka"]["tmp_name"], $target_dir."/".$nama_baru);

		$sql_ubah = "UPDATE tb_kk SET
			kaka='".$nama_baru."',
			no_kk='".$_POST['no_kk']."',
			kepala='".$_POST['kepala']."',
			desa='".$_POST['desa']."',
			rt='".$_POST['rt']."',
			rw='".$_POST['rw']."',
			kec='".$_POST['kec']."',
			kab='".$_POST['kab']."',
			prov='".$_POST['prov']."'
			WHERE id_kk='".$_POST['id_kk']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);

		}elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_kk SET 
			no_kk='".$_POST['no_kk']."',
			kepala='".$_POST['kepala']."',
			desa='".$_POST['desa']."',
			rt='".$_POST['rt']."',
			rw='".$_POST['rw']."',
			kec='".$_POST['kec']."',
			kab='".$_POST['kab']."',
			prov='".$_POST['prov']."'
			WHERE id_kk='".$_POST['id_kk']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
		}
		mysqli_close($koneksi);
    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kartu';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kartu';
        }
      })</script>";
	}}
	
?>

<!-- end -->