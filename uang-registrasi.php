<?php 
$query = mysqli_query($conn, "SELECT * FROM `data_bayar_regis` WHERE status='n'");
// $ambil = mysqli_fetch_array($query);
 ?>

<div class="container">
		              <div class="card-body">
		                <form action="act/act-bukti-tf-regis" method="POST" enctype="multipart/form-data" >
		                  <div class="form-group row">
		                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Nama</label>
		                    <div class="col-md-10">
		                    	<select class="form-control" name="nama">
		                    		<option value="" selected="" disabled="">-- Pilih Nama Anda --</option>
		                    		<?php while ($ambil = mysqli_fetch_array($query)){
		                    			echo '<option value="'.$ambil["nama"].'">'.$ambil["nama"].'</option>';
		                    		} ?>
		                    	</select>
		                      <!-- <input class="form-control" type="text" value="" id="example-text-input" placeholder="Nama Lengkap"> -->
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-search-input" class="col-md-2 col-form-label form-control-label">Rekening yang dituju</label>
		                    <div class="col-md-10">
				                  <select class="form-control" name="bank_dituju" data-toggle="select">
				                    <option selected="select" disabled="1">- Pilih Rekening Bank -</option>
				                    <option value="Mandiri">Mandiri</option>
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-search-input" class="col-md-2 col-form-label form-control-label">Iuran Bulan </label>
		                    <div class="col-md-10">
				                  <select class="form-control" name="bank_dituju" data-toggle="select">
				                    <option selected="select" disabled="1">- Pilih Rekening Bank -</option>
				                    <option value="Mandiri">Mandiri</option>
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-email-input" class="col-md-2 col-form-label form-control-label">Nomor Rekening Pengirim</label>
		                    <div class="col-md-10">
		                      <input class="form-control" name="norek" type="number" placeholder="Nomor Rekening Pengirim" id="example-email-input">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-url-input" class="col-md-2 col-form-label form-control-label">Nama Rekening Pengirim</label>
		                    <div class="col-md-10">
		                      <input class="form-control" name="namrek" type="text" placeholder="Nama Rekening Pengirim" id="example-url-input">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-url-input" class="col-md-2 col-form-label form-control-label">Nominal Transfer</label>
		                    <div class="col-md-10">
		                      <input class="form-control" name="nominal" id="rupiah" type="text" placeholder="Nominal Transfer" id="example-url-input">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-datetime-local-input" class="col-md-2 col-form-label form-control-label">Tanggal Transfer</label>
		                    <div class="col-md-10">
		                      <input class="form-control" name="tgl_trf" type="date" value="" id="example-datetime-local-input">
		                    </div>
		                  </div>
		                  <div class="form-group row">
		                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label">Upload bukti transfer</label>
		                    <div class="col-md-10">
		                      <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
				                  <div class="fallback">
				                    <div class="custom-file">
				                      <input type="file" name="bukti_tf[]" class="custom-file-input" id="projectCoverUploads">
				                      <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
				                    </div>
				                  </div>
				                  <div class="dz-preview dz-preview-single">
				                    <div class="dz-preview-cover">
				                      <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
				                    </div>
				                  </div>
				                </div>
		                    </div>
		                  </div>
		                  <center>	
		                  <button align="center" class="btn btn-primary" type="submit">Upload Data</button>
		              </center>
		                </form>
		              </div>
		            </div>