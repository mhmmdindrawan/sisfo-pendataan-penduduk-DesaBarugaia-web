<?php
if(isset($_GET['kode'])){
    $sql_cek = "select * from tb_pdd where id_pend='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
    $ktp=$data_cek['ktp'];
    if (file_exists("file_ktp/$ktp")){
        unlink("file_ktp/$ktp");
    }

    $sql_hapus = "DELETE FROM tb_pdd WHERE id_pend='".$_GET['kode']."'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);

    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pend';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pend';
            }
        })</script>";
    }
?>

<!-- end -->