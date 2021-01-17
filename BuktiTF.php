<?php 
include "conf/config.php";
$sql = "SELECT * FROM `users` ORDER BY `users`.`nama` ASC";
$data = mysqli_query($conn, $sql);
$isi = mysqli_fetch_array($data);
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Upload Bukti Transfer</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
	<?php require_once 'lib/navbar.php';  ?>
	<br>	
				<div class="container">	
		            <!-- HTML5 inputs -->
		            <div class="card">
		              <!-- Card header -->
		              <div class="card-header">
		                <h1 style="text-align: center;" class="mb-0">Upload Bukti Transfer</h1>
		              </div>
		              <?php 
		              	if (isset($_GET['page'])) {
		              		$page = $_GET['page'];
		              	switch ($page) {
		              		case 'uang-iuran':
		              			include 'uang-iuran.php';
		              			break;
		              		case 'uang-registrasi':
		              			include 'uang-registrasi.php';
		              			break;
		              		
		              		default:
		              			
		              			break;
		              	}
		              	}
		               ?>
		              <!-- Card body -->
		              <br>
		              <br>
		              <br>
		              <center><a href="BuktiTF?page=uang-registrasi">	
		                  <button align="center" class="btn btn-primary" type="submit">Upload Bukti TF Pendaftaran</button></a><a href="BuktiTF?page=uang-iuran">
		                  <button align="center" class="btn btn-success" type="submit">Upload Bukti TF Iuran</button> </a>
		              </center> <br>
		              
		          </div>
        <?php require_once 'lib/footer.php'; ?>
  <!-- Argon Scripts -->
  <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
  <!-- Core -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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