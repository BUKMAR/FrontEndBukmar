  <!DOCTYPE html>
  <html>
  <head>
  	<?php require_once(APPPATH .'views/include/include.php'); ?>
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

		.fa-3x {
    	font-size: 1.4em;
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

		.red-label {
			color: #fff;
			font-size: 12px;
			padding: 3px;
			font-weight: 400;
			display: inline;
		}

  </style>
  <script type="text/javascript">
      $(document).ready(function() {
         $(".jqzoom").jqzoom({
         	zoomType: 'standard',
         	lens: true,
         	preloadImages: false,
         	alwaysOn: false
         });
      });
   </script>

  <body screen_capture_incject="true" style="background-color: #fff;">
  	<div id="skippy">
	</div>
	<header>
		<?php require_once(APPPATH .'views/templates/first_nav.php'); ?>
		<!-- <?php require_once(APPPATH .'views/templates/navigasi.php'); ?> 
	</header><!-- /header -->

	<!-- body content -->
	<content>
		<div class="container-fluid">
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

								<!-- Required input text -->
								<form id="form" action="<?php echo base_url("index.php/home/tambah_ke_keranjang"); ?>" method="POST">
									<input type="hidden" id="stok" value="<?php echo $barang_paket['stok']; ?>"/>
									<input type="hidden" 
									name="id-barang" value="<?php echo $barang_paket['id_barang_paket']; ?>"/>
									<input type="hidden" id="kuantitas" name="kuantitas" value="1" />
									<input type="hidden" id="status" name="status" value="false" />
								</form>

			<div class="row">
				<!-- bagian content -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<a class="text-success" style="font-size: 20px; font-weight: bold; text-decoration: none; line-height: 12px;" href="#" ><?php echo $barang_paket['nama_paket']; ?></a>
					<br>
					<br>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

							<!-- include zoomimage -->
							<link rel="stylesheet" href="<?php echo base_url("assets/jqzoom/css/jquery.jqzoom.css"); ?>">
							<script type="text/javascript" src="<?php echo base_url("assets/jqzoom/js/jquery.jqzoom-core.js"); ?>"></script>

								<!-- bagian detail gambar produk -->
								<div class="clearfix">
									<a href="<?php echo base_url($barang_paket['foto_barang']); ?>" class='jqzoom' rel='gal1'>
				                    <img src="<?php echo base_url($barang_paket['foto_barang']); ?>" height="400" class="img-responsive" alt="Image" width="500">
				                </a>
								</div>
								<br>
								<div class="clearfix">

									<ul id="thumblist" class="clearfix" >
					               <li>
					               	<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url($barang_paket['foto_barang']); ?>',largeimage: '<?php echo base_url($barang_paket['foto_barang']); ?>'}">
					               		<img class='imgThum-small' src='<?php echo base_url($barang_paket['foto_barang']); ?>'>
					               	</a>
					               </li>

					            </ul>

								</div>
							</div> <!-- end coll load image -->

							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<div role="tabpanel">
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
															<td><?php echo $barang_paket['dilihat']; ?></td>
															<td> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp; Stok Barang </td>
															<td><?php echo $barang_paket['stok']; ?></td>
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

								<span style="margin-top: 10px;">
										<p style="text-align: left; font-size: 20px;">Deskripsi Produk</p>
										<p style="color: #606060;">
											<?php echo $barang_paket['keterangan']; ?>
										</p>
								</span>
							</div> <!-- end content -->
						</div> <!-- end row content -->
				</div>
				
				<!-- bagian tombol beli -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<p class="text-danger" style="font-size: 26px; font-weight: bold;">
					<?php 
						echo "Rp. ". number_format($barang_paket['harga_jual'], 0, ".", ".");
					?>
					</p>
					<?php if(!empty($barang_paket['diskon'])) { ?>
					<p class="text-default" style="font-weight: 500; text-align: center; margin-top: -15px; color: #ccc;"><del>Rp. 20.000</del> <span class="red-label">Diskon 33%</span> </p>
					<?php } ?>
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
					<br>
					<button id="btn-beli" type="button" class="btn btn-warning btn-block"> BELI </button>
					<button id="btn-masukkan-ke-keranjang" type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp; Tambahkan ke Keranjang </button>
					<button type="button" class="btn btn-block"> <span class="glyphicon glyphicon-heart"></span> &nbsp; Tambahkan Ke Wishlist </button>
				</div>
			</div>
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
         	$("#form").submit();
         });

         $("#btn-beli").click(function(event) {
	        $("#kuantitas").attr("value", $("#qty").val());
	     	$("#status").val("true");
	        $("#form").submit();
         });

         $("#kuantitas").attr("value", "1");
      });

    </script>
	<?php require_once(APPPATH .'views/templates/footer.php'); ?>
	
  </body>
  </html>