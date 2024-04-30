 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<style>
       #map {
        height: 430px;
        width: 95%;
        margin: 20px auto;
       }
       .footer p{
         padding-top: 20px;
         padding-left: 30px;
         display: inline-block;

       }
       .footer ul{
         display: inline-block;
       }
       .footer li{
         display: inline;
         text-decoration: none;
         padding-right: 10px;
       }
       .container{
         margin-left: 1.3%;
       }
    </style>
<?php

  $sql = $koneksi->query("SELECT COUNT(id_pend) as pend  from tb_pdd where status='Ada'");
  while ($data= $sql->fetch_assoc()) {
    $pend=$data['pend'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kk) as kartu  from tb_kk");
  while ($data= $sql->fetch_assoc()) {
    $kartu=$data['kartu'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pend) as laki  from tb_pdd where jekel='LK'");
  while ($data= $sql->fetch_assoc()) {
    $laki=$data['laki'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pend) as prem  from tb_pdd where jekel='PR'");
  while ($data= $sql->fetch_assoc()) {
    $prem=$data['prem'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_lahir) as lahir from tb_lahir");
  while ($data= $sql->fetch_assoc()) {
    $lahir=$data['lahir'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_mendu) as mendu  from tb_mendu");
  while ($data= $sql->fetch_assoc()) {
    $mendu=$data['mendu'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_datang) as datang  from tb_datang");
  while ($data= $sql->fetch_assoc()) {
    $datang=$data['datang'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pindah) as pindah  from tb_pindah");
  while ($data= $sql->fetch_assoc()) {
    $pindah=$data['pindah'];
  }

?>



<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pend;  ?>
				</h3>

				<p>Penduduk</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pend" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $kartu;  ?>
				</h3>

				<p>Kartu Keluarga</p>
			</div>
			<div class="icon">
				<i class="ion ion-card"></i>
			</div>
			<a href="index.php?page=data-kartu" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>
					<?php echo $laki;  ?>
				</h3>

				<p>Laki-laki</p>
			</div>
			<div class="icon">
				<i class="ion ion-male"></i>
			</div>
			<a href="index.php?page=data-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $prem;  ?>
				</h3>

				<p>Perempuan</p>
			</div>
			<div class="icon">
				<i class="ion ion-female"></i>
			</div>
			<a href="index.php?page=log-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $lahir;  ?>
				</h3>

				<p>Lahir</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="index.php?page=data-pend" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $mendu;  ?>
				</h3>

				<p>Meninggal</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-sad"></i>
			</div>
			<a href="index.php?page=data-kartu" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>
					<?php echo $datang;  ?>
				</h3>

				<p>Pendatang</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-download"></i>
			</div>
			<a href="index.php?page=data-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $pindah;  ?>
				</h3>

				<p>Pindah</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-upload"></i>
			</div>
			<a href="index.php?page=log-izin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

</div>

    <div id="map" class="w3-card-4"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd3dSy2ivrW8j-Pmz12_bs2rwSaCapCx8&callback=initMap"></script>
    <script type="text/javascript">
      function initMap() {

        var location = new Array();

          <?php
          if(isset($_POST['cari'])){
            $kec = $_POST['kec'];
            $koor = $mysqli->koordinat($kec);
            ?>
            location = [
            <?php
            while($row = $koor->fetch_assoc()){
              ?>
              [<?php echo $row['Lat']; ?>,
              <?php echo $row['Long']; ?>,
              '<?php echo $row['Desa']; ?>',
              '<?php echo $row['Kecamatan']; ?>',
              <?php echo $row['L']; ?>,
              <?php echo $row['P']; ?>,
              <?php echo $row['Jumlah']; ?>],
              <?php
            }
           ?>
        ];
        var opt = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'),opt);
        var infowindow = new google.maps.InfoWindow(),marker,i;
        var bounds = new google.maps.LatLngBounds();
        for (i = 0; i < location.length; i++) {
          /*
          load semua marker dari database
          */
          pos = new google.maps.LatLng(location[i][0],location[i][1]);
          bounds.extend(pos);
          marker = new google.maps.Marker({
            position: pos,
            map: map
          });
          /*
          menambahkan event click untuk menampilkan infowindow sesuai dengan marker yang di pilih
          */
          google.maps.event.addListener(marker,'click',(function(marker,i){
            return function(){
              infowindow.setContent('<h3>Desa '+location[i][2]+'<h3>'+
                                    '<h6>Kecamatan '+location[i][3]+'</h6><hr>'+
                                    '<h4>Jumlah Penduduk</h4>'+
                                    '<p><b>Laki - laki : '+location[i][4]+'<br>'+
                                    'Perempuan : '+location[i][5]+'<br>'+
                                    'Jumlah : '+location[i][6]+'</b></p>'
                                    );
              infowindow.open(map,marker);
            }
          })(marker,i));
        }
        map.fitBounds(bounds);
        <?php
      }else{
        ?>
        var mapOpt = {
          zoom: 14,
          center: new google.maps.LatLng(-6.117904,120.461459),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'),mapOpt);
        <?php
      }
      ?>
    }
    </script>

