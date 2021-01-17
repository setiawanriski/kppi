<?php 
require_once 'conf/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Rekap</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.1.0" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>

<body>
	<?php require_once 'lib/navbar.php';  ?>
	<br>	
		<form action="act/act-rekap.php" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<!-- <div class="card-header"> -->
				<!-- <div class="card-wrapped"> -->
					<div class="card">
						<h1 class="text-center">Form Rekap</h1>
					</div>
				<!-- </div> -->
			<!-- </div> -->
		</div>
			<div class="col-lg-6">
	          <div class="card-wrapper">
	            <!-- Form controls -->
	            <div class="card">
	              <!-- Card header -->
	              <div class="card-header">
	                <h3 class="mb-0">Lengkapi isian dengan teliti !</h3>
	              </div>
	              <!-- Card body -->
	              <div class="card-body">
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlInput1">Nama Lengkap</label>
	                    <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
	                  </div>
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlTextarea1">Alamat </label>
	                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
	                  </div>
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlInput1">No. Wa/HP</label>
	                    <input type="number" name="nope" class="form-control" id="exampleFormControlInput1" placeholder="No HP/WA">
	                </div>
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlInput1">Email </label>
	                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	                  </div>
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlInput1">No. KTP</label>
	                    <input type="number" name="noktp" class="form-control" id="exampleFormControlInput1" placeholder="No. KTP">
	                  </div>	
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlInput1">Password</label>
	                    <input type="password" name="password1" class="form-control" id="exampleFormControlInput1" placeholder="Password">
	                  </div>	     
	              </div>
	            </div>
	       	  </div>
	    	</div>
			<div class="col-lg-6">
	          <div class="card-wrapper">
	            <!-- Form controls -->
	            <div class="card">
	              <!-- Card header -->
	              <div class="card-header">
	                <h3 class="mb-0">Lengkapi isian dengan teliti !</h3>
	              </div>
	              <!-- Card body -->
	              <div class="card-body">
	                  <div class="form-group">
	                    <label class="form-control-label" for="exampleFormControlTextarea1">Tempat Lahir</label>
	                    <textarea class="form-control" name="tempat_lahir" id="exampleFormControlTextarea1" rows="3"></textarea>
	                  </div>
	                  <div class="form-group col-lg-6">
			                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
			                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
			                      <option value="L">LAKI-LAKI</option>
			                      <option value="P">PEREMPUAN</option>
			                    </select>
			                </div>
	                  </div>
		                  <div class="form-group col-lg-6">
		                    <label class="form-control-label" for="exampleFormControlInput1">Nama Orang Tua</label>
		                    <input type="text" name="nama_ortu" class="form-control" id="exampleFormControlInput1" placeholder="Nama Orang Tua">
		                  </div>
	                  </div>
	                  <div class="row">
	                  		<div class="form-group col-lg-6">
			                    <label for="tanggal_lahir" >Tanggal Lahir</label>
			                    <input class="form-control" type="date" value="" name="tanggal_lahir" id="tanggal_lahir">
			                </div>
			                <div class="form-group col-lg-6">
			                    <label class="form-control-label" for="Pekerjaan">Pekerjaan</label>
			                    <select class="form-control" id="Pekerjaan" name="pekerjaan">
			                      <option value="TNI/POLRI">TNI/POLRI</option>
			                      <option value="Wiraswasta">Wiraswasta</option>
			                      <option value="Aparatur Sipil Negara (ASN)">Aparatur Sipil Negara (ASN)</option>
			                      <option value="Pegawai Swasta">Pegawai Swasta</option>
			                      <option value="Profesional">Profesional</option>
			                      <option value="Mahasiswa/Pelajar">Mahasiswa/Pelajar</option>
			                      <option value="Ibu rumah tangga">Ibu rumah tangga</option>
			                      <option>Lain-lain</option>
			                    </select>
			                </div>
	                  </div>
	                  <div class="row">
	                  	   <div class="form-group col-lg-6">
		                    <label class="form-control-label" for="koordinator">koordinator</label>
		                    <select class="form-control" id="form_prov" name="koordinator">
		                      <option selected="1" disabled="1">- Pilih -</option>
		                    	<?php 
								$daerah = mysqli_query($conn,"SELECT kode,isi FROM koordinator_wilayah WHERE CHAR_LENGTH(kode)=2 ORDER BY isi");
								// print_r($daerah);
								while($d = mysqli_fetch_array($daerah)){
									?>
									<option value="<?php echo $d['kode']; ?>"><?php echo $d['isi']; ?></option>
									<?php 
								}
								?>
		                      <!-- <option value="DKI Jakarta">DKI Jakarta</option>
		                      <option value="Jakarta Pusat">Jakarta Pusat</option>
		                      <option value="Jakarta Timur">Jakarta Timur</option>
		                      <option value="Jakarta Selatan">Jakarta Selatan</option>
		                      <option value="Jakarta Barat">Jakarta Barat</option>
		                      <option value="Jakarta Utara">Jakarta Utara</option>
		                      <option value="Eksternal">Eksternal</option> -->
		                    </select>
		                  </div>
		                  <div class="form-group col-lg-6">
		                    <label class="form-control-label" for="sub_area">Sub Koordinator</label>
		                    <select class="form-control" id="form_kab" name="sub_area">
		                      <!-- <option value="Kodya Jakarta Pusat" >-</option><option value="Sawah Besar" >Sawah Besar</option><option value="Senen" >Senen</option><option value="Cempaka Putih" >Cempaka Putih</option><option value="Kemayoran" >Kemayoran</option><option value="Johar Baru" >Johar Baru</option><option value="Gambir" >Gambir</option><option value="Tanah Abang" >Tanah Abang</option><option value="Menteng" >Menteng</option>                    
		                      <option value="Jakarta Pusat">Jakarta Pusat</option>
		                      <option value="Jakarta Timur">Jakarta Timur</option>
		                      <option value="Jakarta Selatan">Jakarta Selatan</option>
		                      <option value="Jakarta Barat">Jakarta Barat</option>
		                      <option value="Jakarta Utara">Jakarta Utara</option>
		                      <option value="Eksternal">Eksternal</option> -->
		                    </select>
		                  </div>
	                  </div>
	                  <div class="row">
	                  	  <div class="form-group col-lg-6">
		                    <label class="form-control-label" for="jenis_usaha">Jenis Usaha</label>
		                    <select class="form-control" id="jenis_usaha" name="jenis_usaha">
		                      <option value="Barang">Barang</option>
		                      <option value="jasa">Jasa</option>
		                    </select>
		                  </div>
		                  <div class="form-group col-lg-6">
		                    <label class="form-control-label" for="ben_usaha">Bentuk Usaha</label>
		                    <select class="form-control" id="ben_usaha" name="ben_usaha">
		                      <option value="Perorangan">Perorangan</option>
		                      <option value="Jasa">Lembaga</option>
		                    </select>
		                  </div>
	                  </div>
	                  <div class="row">
	                  	<div class="form-group col-lg-6">
		                    <label for="bid_usaha">Bidang Usaha</label>
		                      <input class="form-control" type="text" value="" name="bid_usaha" id="lama_usaha">
		                 </div>
	                  	<div class="form-group col-lg-6">
		                    <label for="lama_usaha">Lama Usaha</label>
		                      <input class="form-control" type="text" value="" name="lama_usaha" id="lama_usaha">
		                 </div>
	                  	
	                  </div>
	                  	<div class="form-group">
		                    <label for="alamat_usaha">Alamat Usaha</label>
		                      <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat_usaha">
		                 </div>
	              </div>
	            </div>
	       	  </div>
	    	</div>
	              <div class="card-body">
	              	<button type="submit" class="btn btn-primary btn-lg btn-block" name="simpan">Simpan</button>
	              </div>
    	</form>
	</div>
        <?php require_once 'lib/footer.php'; ?>
  <!-- Argon Scripts -->
  <!-- Core -->
  		<script type="text/javascript">
		$(document).ready(function(){

			// sembunyikan form kabupaten, kecamatan dan desa
			$("#form_kab").hide();
			$("#form_kec").hide();


			// ambil data kabupaten ketika data memilih provinsi
			$('body').on("change","#form_prov",function(){
				var id = $(this).val();
				var data = "id="+id+"&data=kabupaten";
				$.ajax({
					type: 'POST',
					url: "act/get_koor.php",
					data: data,
					success: function(hasil) {
						$("#form_kab").html(hasil);
						$("#form_kab").show();
						$("#form_kec").hide();

					}
				});
			});

			// ambil data kecamatan/kota ketika data memilih kabupaten
			$('body').on("change","#form_kab",function(){
				var id = $(this).val();
				var data = "id="+id+"&data=kecamatan";
				$.ajax({
					type: 'POST',
					url: "act/get_koor.php",
					data: data,
					success: function(hasil) {
						$("#form_kec").html(hasil);
						$("#form_kec").show();
						$("#form_des").hide();
					}
				});
			});
		});
	</script>
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="assets/js/demo.min.js"></script>
</body>

</html>