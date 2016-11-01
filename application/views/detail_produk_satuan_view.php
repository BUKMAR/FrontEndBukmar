  <!DOCTYPE html>
  <html>
  <head>
  	<?php require_once(APPPATH .'views/include/include.php'); ?>
  	<link rel="stylesheet" href="<?php echo base_url("assets/sweetalert/sweetalert.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  </head>
  <style type="text/css">
  	.navbar {
    		margin-bottom: 0px;
    	}

    	* {
	      box-sizing: border-box;
	    }

	    .slider {
	        width: 100%;
	        margin-top: 40px;
	        padding-left: 25px;
	        padding-right: 25px;
	    }

	    .slick-slide {
	      margin: 0px 0px;
	    }

	    .slick-slide img {
	      width: 250px;
	      height: 280px;
	    }

	    .command-3x {
				font-size: 3em;
			}

	    .slider-row {
	    	background-color: #ffffff;
	    	padding-bottom: 0px;
	    	padding-top: 10px;
	    	padding-bottom: 10px;
	    }

	    .isi h2 {
	    	padding-left: 35px;
	    }

	    a {
	    	text-
	    }

	    .breadcrumb {
	    	margin-top: -18px;
	    }
		
		.red-label {
			background: #e41b25;
			margin: 3px 0;
		}

		.red-label {
			color: #fff;
			font-size: 12px;
			padding: 3px;
			font-weight: 400;
			display: inline;
		}

		.fa-3x {
    	font-size: 1.4em;
		}

		.fa-3x-colapse {
			font-size: 2em;
		}

		.navbar .divider-vertical {
		  height: 50px;
		  margin: 0 9px;
		  border-left: 1px solid #f2f2f2;
		  border-right: 1px solid #ffffff;
		}

		.input-group-btn {
		    position: relative;
		    font-size: 0;
		    white-space: nowrap;
		}

		.dropdown-item {
    display: block;
    width: 100%;
    padding: 3px 1.5rem;
    clear: both;
    font-weight: 400;
    color: #373a3c;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
}

    .btn-secondary {
    color: #373a3c;
    background-color: #fff;
    border-color: #ccc;
}

  </style>
  <body screen_capture_incject="true" style="background-color: #fff;">
  	<header>
			<?php require_once(APPPATH .'views/templates/first_nav.php'); ?>
			<?php require_once(APPPATH .'views/templates/navigasi.php'); ?>
		</header><!-- /header -->

	<!-- body content -->
	<content>
		<div class="container-fluid" style="margin-top: 20px;">
			<!-- command link breadcrumb -->
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
				<li class="active">Current</li>
			</ol>

			<div class="row">
				<!-- bagian content -->
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

								<!-- include zoomimage -->
								<link rel="stylesheet" href="<?php echo base_url("assets/jqzoom/css/jquery.jqzoom.css"); ?>">
								<script type="text/javascript" src="<?php echo base_url("assets/jqzoom/js/jquery.jqzoom-core.js"); ?>"></script>
								<!-- bagian detail gambar produk -->
								<div class="clearfix">
									<?php foreach($foto_barang_satuan as $item) { ?>
									<a href="" class='jqzoom' rel='gal1'>
										<img src="<?php echo base_url($item['foto_barang']); ?>" class="img-responsive" alt="Image-Produk" style="height: 500px; width: 500;"/>
										<?php break; ?>
										<?php } ?>
									</a>
								</div>
								<br>
								<div class="clearfix">
									<ul id="thumblist" class="clearfix" >
										<?php foreach($foto_barang_satuan as $item) { ?>
										<li>
											<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url($item['foto_barang']); ?>',largeimage: '<?php echo base_url($item['foto_barang']); ?>'}">
												<img class='imgThum-small' src='<?php echo base_url($item['foto_barang']); ?>'>
											</a>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div> <!-- end coll load image -->

							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<a class="text-success" style="font-size: 20px; font-weight: bold; text-decoration: none; line-height: 12px;" href="#" ><?php echo $barang_satuan['nama_barang']; ?></a>
								<br>
								<br>


								<!-- Required input text -->
								<form id="form" action="<?php echo base_url("index.php/home/tambah_ke_keranjang"); ?>" method="POST">
									<input type="hidden" name="harga-tawar" 
									id="harga-tawar" value="<?php echo $barang_satuan['harga_tawar']; ?>"/>
									<input type="hidden" id="stok" value="<?php echo $barang_satuan['stok']; ?>"/>
									<input type="hidden" 
									name="id-barang" value="<?php echo $barang_satuan['id_barang_satuan']; ?>"/>
									<input type="hidden" id="kuantitas" name="kuantitas" value="1" />
									<input type="hidden" id="status" name="status" value="false" />
								</form>

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Harga Kami</p>
										<p style="color: red; font-size: 20px;">
										<?php 
											echo "Rp. ". number_format($barang_satuan['harga_jual'], 0, ".", ".");
										?>
										</p>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Tawaran Anda</p>
										<input type="number" name="tawaran" id="input-tawaran" class="form-control"/>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Kuantitas</p>
										<div class="input-group">
									      <span class="input-group-btn">
									        <button id="btn-min" class="btn btn-default" type="button">-</button>
									      </span>
									      <input type="text" id="qty" name="qty" class="form-control" style="text-align: center;" placeholder="Qty" value="1">
									      <span class="input-group-btn">
									        <button id="btn-plus" class="btn btn-default" type="button">+</button>
									      </span>
									   </div><!-- /input-group -->
									</div>
								</div>

								<div id="tab-produk" role="tabpanel" style="margin-left: 10px;">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active">
												<a href="#informasi-produk" aria-controls="informasi-produk" role="tab" data-toggle="tab">Informasi Produk</a>
											</li>
										</ul>
										
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="informasi-produk" style="text-align: justify;">
												<table class="table">
													<tbody>
														<tr>
															<td> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> &nbsp; Lihat </td>
															<td><?php echo $barang_satuan['dilihat']; ?></td>
															<td> <span class="glyphicon glyphicon-scale" aria-hidden="true"></span> &nbsp; Berat </td>
															<td><?php echo $barang_satuan['berat']; ?></td>
															
														</tr>
														<tr>
															<td> <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> &nbsp; Kondisi </td>
															<td> Baru </td>
															<td> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> &nbsp; Pemesanan Min. </td>
															<td> 1 pics </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
								</div>

								<div class="panel-group" id="accordion" style="margin-top: 10px;">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#informasiProduk">
												Informasi Produk
											</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
											</h4>
										</div>
										<div id="informasiProduk" class="panel-collapse collapse in">
											<div class="panel-body">
												<table class="table table-bordered table-hover">
													<tbody>
														<tr>
															<td><span class="glyphicon glyphicon-eye-open"></span> &nbsp; Lihat</td>
															<td>126</td>
														</tr>
														<tr>
															<td><span class="glyphicon glyphicon-tags"></span> &nbsp; Kondisi</td>
															<td>Baru</td>
														</tr>
														<tr>
															<td><span class="glyphicon glyphicon-scale"></span> &nbsp; Berat</td>
															<td>0</td>
														</tr>
														<tr>
															<td><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp; Pemesanan</td>
															<td>1 pics</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#deskripsiProduk">
												Deskripsi Produk
											</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></i>
											</h4>
										</div>
										<div id="deskripsiProduk" class="panel-collapse collapse">
											<div class="panel-body">
												<?php echo $barang_satuan["keterangan"]; ?>
											</div>
										</div>
									</div>
								</div>

								<span id="deskripsi" style="margin-top: 10px;">
										<p style="text-align: left; font-size: 20px;">Deskripsi Produk</p>
										<p style="color: #606060;">
										<?php echo $barang_satuan["keterangan"]; ?>
										</p>
								</span>
							</div> <!-- end content -->
						</div> <!-- end row content -->
						
						<!-- bagian testimoni / komentar -->
						<!-- <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
								<legend style="border-top:1px dotted #1b1b1b;">Berikan Komentar Produk</legend>
								<div class="panel panel-default" style="border-radius: 0px;">
									<div class="panel-footer">

										<p> <span class="glyphicon glyphicon-user"></span> Name User &nbsp; &nbsp; <span class="glyphicon glyphicon-time"></span> 24:00 PM &nbsp; &nbsp; <span class="glyphicon glyphicon-calendar"></span> 30-11-2016 </p>
										
										<div class="row">
											<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
												<p> <span class="glyphicon glyphicon-comment command-3x"></span> </p>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-11 col-lg-11">
												<p style="font-weight: bold;"> Title Commentar </p> <p style="margin-top: -10px;"><span> " Your Command "</span> </p>
											</div>
										</div>

									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-body">
										<label><span class="glyphicon glyphicon-pencil"></span> &nbsp; Tinggalkan Komentar </label>
										<hr style="border-top:1px dotted #1b1b1b;">
										<form action="" method="POST" role="form">
										
											<div class="form-group">
												<label>Title Komentar</label>
												<input type="text" class="form-control" size="40" placeholder="Title Komentar">
												<br>
												<textarea name="comentar" id="inputComentar" placeholder="Add a command..." class="form-control" rows="3" required="required"></textarea>
											</div>
							
										</form>										
									</div>
									<div class="panel-footer">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

											</div>
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
												<button type="button" class="btn btn-block btn-success"> <span class="glyphicon glyphicon-comment"></span> Command</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
							</div>
						</div>
						<!-- enc testimoni -->
				</div>
				
				<!-- bagian tombol beli -->
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<button id="btn-beli" type="button" class="btn btn-warning btn-block"> BELI </button>
					<button id="btn-masukkan-ke-keranjang" type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp; Tambahkan ke Keranjang </button>
					<button type="button" class="btn btn-block"> <span class="glyphicon glyphicon-heart"></span> &nbsp; Tambahkan Ke Wishlist </button>
				</div>
			</div>


			<!-- produk / jenis lainnya -->
			<!-- <legend>
				<p><h2><small>Produk / Sejenis</small></h2></p>
			</legend> -->

			<!-- <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
					<?php for ($i = 0; $i < 6; $i++): ?>
						<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
		  					<div class="panel panel-default" style="border-radius: 0px;">
		  						<div class="panel-body">
		  							<div class="row">
		  								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			  								<a href="<?php echo base_url('index.php/home/detail_produk'); ?>" title="" style="text-decoration:none">
			  									<img src="<?php echo base_url("assets/images/s/teh_2s.png"); ?>" class="img-responsive" alt="Image" height="400" width="500">
			  								</div>
			  								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 5px;">
			  									<h4><small>Nama Barang</small></h4>
			  									<p style="margin-top: -4px;">
			  										<h4 style="color: red;">Rp. 50.000,-</h4>
			  									</p>
			  									<p style="margin-top: -4px;">
			  										<h5><small><s>Rp. 50.000</s></small></h5>
			  										<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
			  									</p>
			  								</a>
		  								</div>
		  							</div>
		  						</div>
		  					</div>
		  			</div>
		  			<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
		  					<div class="panel panel-default" style="border-radius: 0px;">
		  						<div class="panel-body">
		  							<div class="row">
		  								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			  								<a href="<?php echo base_url('index.php/home/detail_produk'); ?>" title="" style="text-decoration:none">
			  									<img src="<?php echo base_url("assets/images/s/teh_2s.png"); ?>" class="img-responsive" alt="Image" height="400" width="500">
			  								</div>
			  								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 5px;">
			  									<h4><small>Nama Barang</small></h4>
			  									<p style="margin-top: -4px;">
			  										<h4 style="color: red;">Rp. 50.000,-</h4>
			  									</p>
			  									<p style="margin-top: -4px;">
			  										<h5><small><s>Rp. 50.000</s></small></h5>
			  										<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
			  									</p>
			  								</a>
		  								</div>
		  							</div>
		  						</div>
		  					</div>
		  			</div>
		  		<?php endfor ?>
					</div> 
				</div>
			</div> -->
			<!-- end row content produk terkait  -->
	  		<!-- end content produk -->

		</div>
	</content>
  <script type="text/javascript">
      $(document).ready(function() {
         $(".jqzoom").jqzoom({
         	zoomType: 'standard',
         	lens: true,
         	preloadImages: false,
         	alwaysOn: false
         });

         $("#btn-plus").click(function() {
         	var qty = parseInt($("#qty").val()) + 1;

         	if(qty <= $("#stok").val()) 
         		$("#qty").val(qty);
         });

         $("#btn-min").click(function() {
         	var qty = parseInt($("#qty").val()) - 1;

         	if(qty > 0) 
         		$("#qty").val(qty);
         });

         $("#btn-masukkan-ke-keranjang").click(function(event) {
         	var hargaTawaran =  parseInt($("#input-tawaran").val());
         	var minTawaran = parseInt($("#harga-tawar").val());

         	if(hargaTawaran < minTawaran) {
         		sweetAlert("Oops...", "Harga yang anda tawarkan terlalu rendah", "error");

         		event.preventDefault();
         	} else {
         		if(!isNaN(hargaTawaran)) {
	         		swal("Selamat!", "Harga yang anda tawarkan boleh!", "success");

	         		$("#kuantitas").attr("value", $("#qty").val());
	         		$("#harga-tawar").val($("#input-tawaran").val());
	         		$("#form").submit();
         		} else {
         			sweetAlert("Oops...", "Harga yang anda tawarkan tidak valid", "error");
         		}
         	}
         });

         $("#btn-beli").click(function(event) {
         	var hargaTawaran =  parseInt($("#input-tawaran").val());
         	var minTawaran = parseInt($("#harga-tawar").val());

         	if(hargaTawaran < minTawaran) {
         		sweetAlert("Oops...", "Harga yang anda tawarkan terlalu rendah", "error");

         		event.preventDefault();
         	} else {
         		if(!isNaN(hargaTawaran)) {
	         		swal("Selamat!", "Harga yang anda tawarkan boleh!", "success");

	         		$("#kuantitas").attr("value", $("#qty").val());
	         		$("#harga-tawar").val($("#input-tawaran").val());
	         		$("#status").val("true");
	         		$("#form").submit();
         		} else {
         			sweetAlert("Oops...", "Harga yang anda tawarkan tidak valid", "error");
         		}
         	}
         });

         $("#kuantitas").attr("value", "1");
      });

    function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
		}
		$('#accordion').on('hidden.bs.collapse', toggleChevron);
		$('#accordion').on('shown.bs.collapse', toggleChevron);
   </script>
	<?php require_once(APPPATH .'views/templates/footer.php'); ?>
  </body>
  </html>