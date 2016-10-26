<!DOCTYPE html>
<html>
<head>
	<?php //require_once(APPPATH .'views/include/include.php'); ?>
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>  
	<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
</head>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
    <div class="side-body">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<legend><h1><small><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Tambah Barang Non Paket</small></h1></legend>
			</div>
			
			<!-- menu tab input barang 1 dan export excel -->
      <div role="tabpanel">
      	<!-- Nav tabs -->
      	<ul class="nav nav-tabs" role="tablist">
      		<li role="presentation" class="active">
      			<a href="#manual" aria-controls="home" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Masukan Barang Manual</a>
      		</li>
      		<li role="presentation">
      			<a href="#import" aria-controls="tab" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-import" aria-hidden="true"></span> Masukan Barang File Excel</a>
      		</li>
      	</ul>
      
      	<!-- Tab panes -->
      	<div class="tab-content">
      		<div role="tabpanel" class="tab-pane active" id="manual">
      			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<form action="" method="POST" role="form" enctype="multipart/form-data">
								
									<div class="form-group">
										<label>Nama Barang</label>
										<input type="text" name="nama-barang" class="form-control" placeholder="Nama Barang" required="required">
									</div>

									<div class="form-group">
										<label>Merk Barang</label>
										<input type="text" name="merk-barang" class="form-control" placeholder="Nama Barang" required="required">
									</div>

									<div class="form-group">
										<label>Keterangan</label>
										<textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Keterangan Produk" required="required"></textarea>
										 <script>
                        CKEDITOR.replace( 'keterangan' );
                     	</script>
									</div>

                  <label>Harga Jual</label>
									<div class="input-group">
										<span class="input-group-addon">Rp</span>
										<input type="text" name="harga-jual" id="input" class="form-control" required="required" >
									</div><br>

									<label>Harga Beli</label>
									<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" name="harga-beli" id="input" class="form-control" required="required" >
									</div><br>

                  <label>Harga Tawar</label>
									<div class="input-group">
										<span class="input-group-addon">Rp</span>
										<input type="text" name="harga-tawar" id="input" class="form-control" required="required" >
									</div><br>
										
									<div class="form-group">
										<label>Stok Barang</label>
										<input type="text" name="stok-barang" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Foto Produk 1 <sup style="color: red">[*] wajib di isi</sup></label>
										<input type="file" name="foto-produk-1" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Foto Produk 2</label>
										<input type="file" name="foto-produk-2" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Foto Produk 3</label>
										<input type="file" name="foto-produk-3" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Berat Barang</label>
										<input type="text" name="berat-barang" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Tanggal Kadaluarsa</label>
										<input type="date" name="tanggal-kadaluarsa" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Kategori Barang</label>
										<select name="kategori-barang" id="input" class="form-control" required="required">
											<option value=""></option>
											<option value="" selected="selected">Pilih Kategori Barang</option>
										</select>
									</div>

									<div class="form-group">
										<label>Kategori Usia</label>
										<select name="kategori-usia" id="input" class="form-control" required="required">
											<option value="Anak">Anak</option>
											<option value="Remaja">Remaja</option>
											<option value="Dewasa">Dewasa</option>
											<option value="Lanjut Usia">Lanjut Usia</option>
											<option value="Umum">Umum</option>
											<option value="" selected="selected">Pilih Kategori Usia</option>
										</select>
									</div>
												
									<button type="submit" class="btn btn-primary">Simpan Produk</button>
									<button type="reset" class="btn btn-danger">Batal</button>
								</form>
							</div>
						</div>
      		</div>
      		<div role="tabpanel" class="tab-pane" id="import">
      			<div class="row">
      				<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
      					<form action="" method="POST" role="form" enctype="multipart/form-data">
      			
		      				<div class="form-group">
		      					<label>Import file extensi .excel</label>
		      					<input type="file" class="form-control" id="" required="required">
		      				</div>
		      			
		      				
		      			
		      				<button type="submit" class="btn btn-primary">Upload file</button>
		      			</form>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>

    </div>
  </div>
</body>
</html>