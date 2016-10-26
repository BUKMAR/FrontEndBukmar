<!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"/>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript">
		</script>
		<!— Latest compiled and minified CSS —>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!— Optional theme —>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!— Latest compiled and minified JavaScript —>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
		</script>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js">
		</script>
	</head>
	<body>
		<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
		<div class="container-fluid">
			<div class="side-body">
				<h1>Input Barang Non Paket
				</h1>

				<!-- menu tab input barang 1 dan export excel -->
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#manual" aria-controls="home" role="tab" data-toggle="tab">Masukan Barang Manual
							</a>
						</li>
						<li role="presentation">
							<a href="#import" aria-controls="tab" role="tab" data-toggle="tab">Masukan Barang File Excel
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="manual">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<form action="<?php echo base_url("index.php/admin/submit_tambah_barang"); ?>" method="POST" role="form">

										<div class="form-group">
											<label>Nama Barang
											</label>
											<input type="text" name="nama-barang" class="form-control" placeholder="Nama Barang" >
										</div>

										<div class="form-group">
											<label>Merk Barang
											</label>
											<input type="text" name="merk-barang" class="form-control" placeholder="Nama Barang" >
										</div>

										<div class="form-group">
											<label>Keterangan
											</label>
											<textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Keterangan Produk" required="required">
											</textarea>
											<script>
												CKEDITOR.replace( 'keterangan' );
											</script>
										</div>
										<label>Harga Jual
										</label>
										<div class="input-group">
											<span class="input-group-addon">Rp
											</span>
											<input type="text" name="harga-jual" id="input" class="form-control" >
										</div><br>

										<label>Harga Beli
										</label>
										<div class="input-group">
											<span class="input-group-addon">Rp
											</span>
											<input type="text" name="harga-beli" id="input" class="form-control" >
										</div><br>

										<label>Harga Tawar
										</label>
										<div class="input-group">
											<span class="input-group-addon">Rp
											</span>
											<input type="text" name="harga-tawar" id="input" class="form-control" >
										</div><br>
										<div class="form-group">
											<label>Stok Barang
											</label>
											<input type="text" name="stok-barang" id="stok-barang" class="form-control" >
										</div>

										<div class="form-group">
											<label>Foto Produk 1
												<sup style="color: red">[*] wajib di isi
												</sup>
											</label>
											<input type="file" name="foto-produk-1" id="input" class="form-control" >
										</div>

										<div class="form-group">
											<label>Foto Produk 2
											</label>
											<input type="file" name="foto-produk-2" id="input" class="form-control" >
										</div>

										<div class="form-group">
											<label>Foto Produk 3
											</label>
											<input type="file" name="foto-produk-3" id="input" class="form-control" >
										</div>

										<div class="form-group">
											<label>Berat Barang
											</label>
											<input type="text" name="berat-barang" class="form-control" >
										</div>

										<div class="form-group">
											<label>Tanggal Kadaluarsa
											</label>
											<input required id="tgl" type="date" name="tanggal-kadaluarsa" class="form-control" >
										</div>
										<div class="form-group">
											<label>Kategori Barang
											</label>
											<select name="kategori-barang" id="input" class="form-control" >
												<option disabled="" selected="selected">Pilih Kategori Barang
												</option>
												<option value="">
												</option>
											</select>
										</div>

										<div class="form-group">
											<label>Kategori Usia
											</label>
											<select name="kategori-usia" id="input" class="form-control" required="required">
												<option disabled="" selected="selected">Pilih Kategori Usia
												</option>
												<option value="Anak">Anak
												</option>
												<option value="Remaja">Remaja
												</option>
												<option value="Dewasa">Dewasa
												</option>
												<option value="Lanjut Usia">Lanjut Usia
												</option>
												<option value="Umum">Umum
												</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary">Simpan Produk
										</button>
										<button type="reset" class="btn btn-danger">Batal
										</button>
									</form>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="import">
							<div class="row">
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<p>Import file extensi .excel
									</p>
									<form action="" method="POST" role="form" enctype="multipart/form-data">
										<div class="form-group">
											<label>label
											</label>
											<input type="file" class="form-control" id="" placeholder="Input field">
										</div>
										<button type="submit" class="btn btn-primary">Upload file
										</button>
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