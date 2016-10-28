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
					<a class="navbar-brand" href="#" style="margin-top: -5px; margin-left: -30px;"><img src="<?php echo base_url("assets/images/BUK.png"); ?>" class="img-responsive" alt="Logo" style="width: 150px; height: 40px;"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"></a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="input-group">
						<div class="input-group-btn">
		        <button type="button" style="width: 150px; border-radius: 0px;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Kategori produk &nbsp;
			          <b class="caret"></b>
			        </button>
			        <div class="dropdown-menu">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			          <div role="separator" class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Separated link</a>
			        </div>
			      </div>
				      <input type="text" class="form-control" style="width: 700px; border-radius: 0px;" placeholder="Cari Sembako di Bukmar... ">
				      <span class="input-group-btn">
				        <button class="btn btn-default" style="border-radius: 0px;" type="button">
				        	<span class="glyphicon glyphicon-search"></span>
				        </button>
				      </span>
				    </div><!-- /input-group -->
					</form>
					<ul class="nav navbar-nav navbar-right">
					  <li class="divider-vertical"></li>
						<li><a href="#"><span class="glyphicon glyphicon-shopping-cart fa-3x" aria-hidden="true"></span> <span class="badge" style="margin-top: -30px; margin-left: -10px;">4</span> </a></li>
						<li class="divider-vertical"></li>
						<li><a href="#">Masuk <span class="glyphicon glyphicon-log-in fa-3x"></span></a></li>
						<li class="divider-vertical"></li>
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
					<a class="text-success" style="font-size: 20px; font-weight: bold; text-decoration: none; line-height: 12px;" href="#" >Milo Complete Mix 960g</a>
					<br>
					<br>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

							<!-- include zoomimage -->
							<link rel="stylesheet" href="<?php echo base_url("assets/jqzoom/css/jquery.jqzoom.css"); ?>">
							<script type="text/javascript" src="<?php echo base_url("assets/jqzoom/js/jquery.jqzoom-core.js"); ?>"></script>

								<!-- bagian detail gambar produk -->
								<div class="clearfix">
									<a href="<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_big1.jpg"); ?>" class='jqzoom' rel='gal1'>
				                    <img src="<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_big1.jpg"); ?>" height="400" class="img-responsive" alt="Image" width="500">
				                </a>
								</div>
								<br>
								<div class="clearfix">

									<ul id="thumblist" class="clearfix" >
					               <li>
					               	<a rel="{gallery: 'gal1', smallimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_small1.jpg"); ?>',largeimage: '<?php echo base_url("assets/jqzoom/demos/imgProd/triumph_big1.jpg"); ?>'}">
					               		<img class='imgThum-small' src=' <?php echo base_url("assets/jqzoom/demos/imgProd/thumbs/triumph_thumb1.jpg"); ?>'>
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
					<p class="text-danger" style="font-size: 26px; text-align: center; font-weight: bold;">Rp 78.000,-</p>
					<p class="text-default" style="font-weight: 500; text-align: center; margin-top: -15px; color: #ccc;"><del>Rp. 20.000</del> <span class="red-label">Diskon 33%</span> </p>
					<p class="text-default" style="text-align: center; font-size: 10px;"><i>Perubahan Harga Terakhir: 1-09-2016, 11:40 WIB</i></p>
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<span>
								<label>Kuantitas</label>
							</span>
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
					<br>
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
			  									<img data-src="<?php echo base_url("assets/images/blue.jpg"); ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdhMjNkZGY1ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2EyM2RkZjVmIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY5NTMxMjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="img-responsive" alt="Image" width="500">
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