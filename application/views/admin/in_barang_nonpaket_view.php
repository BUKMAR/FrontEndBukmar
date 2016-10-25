<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"/>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript">
	</script>
</head>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
    <div class="side-body">
      <h1>Input Barang Non Paket</h1>
			
			<!-- menu tab input barang 1 dan export excel -->
      <div role="tabpanel">
      	<!-- Nav tabs -->
      	<ul class="nav nav-tabs" role="tablist">
      		<li role="presentation" class="active">
      			<a href="#manual" aria-controls="home" role="tab" data-toggle="tab">Masukan Barang Manual</a>
      		</li>
      		<li role="presentation">
      			<a href="#import" aria-controls="tab" role="tab" data-toggle="tab">Masukan Barang File Excel</a>
      		</li>
      	</ul>
      
      	<!-- Tab panes -->
      	<div class="tab-content">
      		<div role="tabpanel" class="tab-pane active" id="manual">
      			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<form action="" method="POST" role="form">
														
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
										<textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan Produk" required="required"></textarea>
									</div>

									<div class="row" style="padding: 0;">
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<div class="form-group">
												<label>Harga Jual</label>
												<input type="text" name="harga-jual" id="input" class="form-control" required="required" >
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<div class="form-group">
												<label>Harga Beli</label>
												<input type="text" name="harga-beli" id="input" class="form-control" required="required" >
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Diskon</label>
										<input type="text" name="diskon" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Foto Produk <sup>[*] cover produk</sup></label>
										<input type="file" name="foto-produk-cover" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Foto Slide Show </label>
										<input type="file" name="foto-produk-slide" id="input" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Berat Barang</label>
										<input type="text" name="berat-barang" class="form-control" required="required" >
									</div>

									<div class="form-group">
										<label>Tanggal Kadaluarsa</label>
										<input required id="tgl" type="date" name="tanggal-kadaluarsa" class="form-control" required="required" >
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
      					<p>Import file extensi .excel</p>
      					<form action="" method="POST" role="form" enctype="multipart/form-data">
		      				<div class="form-group">
		      					<label>label</label>
		      					<input type="file" class="form-control" id="" placeholder="Input field">
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
  <script type="text/javascript">
	$(function() {
		$("#tgl").datepicker({
			dateFormat: "dd-mm-yy",
			showButtonPanel: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1930:2010",
			showOtherMonths: true,
			selectOtherMonths: true 
		});
	});
  </script>
</body>
</html>