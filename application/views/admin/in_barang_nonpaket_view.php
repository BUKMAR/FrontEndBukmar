<!DOCTYPE html>
<html>

	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css"/>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript">
		</script>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
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
									<form action="<?php echo base_url('index.php/admin/barang_satuan/submit_tambah_barang') ?>" method="POST" enctype="multipart/form-data" role="form">

										<div class="form-group">
											<label>Nama Barang
											</label>
											<input type="text" name="nama-barang" class="form-control" placeholder="Nama Barang" >
										</div>

										<div class="form-group">
											<label>Nama Brand
											</label>
											<select name="id-brand" class="form-control" >
												<option disabled="" selected="selected">Pilih Kategori Barang
												</option>
												<?php
													foreach($brands as $item) {
														echo "<option value='". $item['id_brand'] ."'>". $item['nama_brand'] ."</option>";
													}
												?>
											</select>
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
											<input required id="tgl" type="date" name="tgl-kadaluarsa" class="form-control" >
										</div>
										<div class="form-group">
											<label>Kategori Barang
											</label>
											<select name="kategori-barang" id="kategori" class="form-control" >
												<option disabled="" selected="selected">Pilih Kategori Barang
												</option>
												<?php
													foreach($kategori as $item) {
														echo "<option value='". $item['id_kategori'] ."'>". $item['nama_kategori'] ."</option>";
													}
												?>
											</select>
										</div>
										<div class="form-group" style="display: none;" id="detail"></div>
										<div class="form-group">
											<label>Kategori Usia
											</label>
											<select name="kategori-usia" id="" class="form-control" required="required">
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
				
				$("#kategori").change(function() {
					$("#detail").css("display", "inline");

					var detailUrl = '<?php echo base_url('index.php/admin/barang_satuan/ajax_fetch_detail_kategori?id_kategori='); ?>' + $("#kategori").val();
    				$.ajax({
					    type: 'POST',
					    contentType : 'json',
					    url: detailUrl,
					    success: function(msg){
					    	var detailKategori = JSON.parse(msg);
					    	var options = "";

					    	for(var i = 0; i < detailKategori.length; i++) {
					    		var itemDetailKategori = detailKategori[i]; 
					    		
								options += "<option value='"+ itemDetailKategori.id_detail_kategori +"'>"+ itemDetailKategori.nama_detail_kategori +"</option>";
							}
							
							var data_select = "<select class='form-control' name='id-detail-kategori'>"+ options +"</select>";
							
							$("#detail").html(data_select +"<br/><br/>");
					    }
					});
				});
			});
		</script>
	</body>
</html>








