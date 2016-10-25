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
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<!--
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					-->
					<a class="navbar-brand" href="#">BRAND LOGO</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"></a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" style="width: 500px;">
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Cari</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
						<a href="#">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"><span class="badge" style="margin-bottom: 0px; margin-top: -20px; margin-left: -2px; background-color: red; color: #fff;">35</span></span></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<?php require_once(APPPATH .'views/templates/navigasi.php'); ?>
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

			<div class="row">
				<!-- bagian content -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

							<!-- include zoomimage -->
							<link rel="stylesheet" href="<?php echo base_url("assets/jqzoom/css/jquery.jqzoom.css"); ?>">
							<script type="text/javascript" src="<?php echo base_url("assets/jqzoom/js/jquery.jqzoom-core.js"); ?>"></script>

								<!-- bagian detail gambar produk -->
								<div class="clearfix">
									<a href="<?php echo base_url("assets/jqzoom/demos/imgProd/minyak_1.png"); ?>" class='jqzoom' rel='gal1'>
				                    <img src="<?php echo base_url("assets/jqzoom/demos/imgProd/minyak_1.png"); ?>" height="400" class="img-responsive" alt="Image" width="500">
				                </a>
								</div>
								<br>
								<div class="clearfix">

									<ul id="thumblist" class="clearfix" >
					               <li>
					               	<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/minyak_1.png"); ?>',largeimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/minyak_1.png"); ?>'}">
					               		<img class='imgThum-small' src=' <?php echo base_url("assets/jqzoom/demos/imgProd/minyak_1.png"); ?>'>
					               	</a>
					               </li>

					               <li>
					               	<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_small2.jpg"); ?>',largeimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_big2.jpg"); ?>'}">
					               		<img class='imgThum-small' src=' <?php echo base_url("assets/jqzoom/demos/imgProd/thumbs/triumph_thumb2.jpg"); ?>'>
					               	</a>
					               </li>

					               <li>
					               	<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_small3.jpg"); ?>',largeimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_big3.jpg"); ?>'}">
					               		<img class='imgThum-small' src=' <?php echo base_url("assets/jqzoom/demos/imgProd/thumbs/triumph_thumb3.jpg"); ?>'>
					               	</a>
					               </li>

					            </ul>

								</div>
							</div> <!-- end coll load image -->

							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<a class="text-success" style="font-size: 20px; font-weight: bold; text-decoration: none; line-height: 12px;" href="#" >Milo Complete Mix 960g</a>
								<br>
								<br>
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Harga Kami</p>
										<p style="color: red; font-size: 20px;">Rp. 10.000.00</p>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Tawaran Anda</p>
										<select name="tawaran" id="inputTawaran" class="form-control" required="required">
											<option value="6000">6000</option>
										</select>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<p style="font-size: 17px;">Kuantitas</p>
										<div class="input-group">
									      <span class="input-group-btn">
									        <button class="btn btn-default" type="button">-</button>
									      </span>
									      <input type="text" class="form-control" style="text-align: center;" placeholder="Qty" value="1">
									      <span class="input-group-btn">
									        <button class="btn btn-default" type="button">+</button>
									      </span>
									   </div><!-- /input-group -->
									</div>
								</div>

								<div role="tabpanel" style="margin-left: 10px;">
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
															<td> 100 </td>
															<td> <span class="glyphicon glyphicon-scale" aria-hidden="true"></span> &nbsp; Berat </td>
															<td> 960 </td>
															
														</tr>
														<tr>
															<td> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> &nbsp; Tanggal Pengiriman </td>
															<td> 12/09/2016 </td>
															<td> <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp; Stok Barang </td>
															<td> 10 </td>
														</tr>
														<tr>
															<td> <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> &nbsp; Kondisi </td>
															<td> Baru </td>
															<td> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> &nbsp; Pemesanan Min. </td>
															<td> 2 pics </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
								</div>

								<span style="margin-top: 10px;">
										<p style="text-align: left; font-size: 20px;">Deskripsi Produk</p>
										<p style="color: #606060;">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
								</span>
							</div> <!-- end content -->
						</div> <!-- end row content -->
						
						<!-- bagian testimoni -->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
										<label><span class="glyphicon glyphicon-pencil"></span> &nbsp; Tinggalkan Komentar </label>
										<textarea name="comentar" id="inputComentar" placeholder="Add a command..." class="form-control" rows="3" required="required"></textarea>
									</div>
									<div class="panel-footer">
										<div class="row">
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

											</div>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<button type="button" class="btn btn-block btn-success"> <span class="glyphicon glyphicon-comment"></span> Command</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
							</div>
						</div>
						<!-- enc testimoni -->
				</div>
				
				<!-- bagian tombol beli -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<button type="button" class="btn btn-warning btn-block"> BELI </button>
					<button type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp; Tambahkan ke Keranjang </button>
					<button type="button" class="btn btn-block"> <span class="glyphicon glyphicon-heart"></span> &nbsp; Tambahkan Ke Wishlist </button>
				</div>
			</div>


			<!-- produk / jenis lainnya -->
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Produk / Sejenis </strong>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
					<?php for ($i = 0; $i < 6; $i++): ?>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		  					<div class="panel panel-default">
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
					</div> <!-- end row content produk terkait  -->
				</div>
			</div>
	  		<!-- end content produk -->

		</div>
	</content>
	
  </body>
  </html>