<nav class="navbar navbar-default" role="navigation" style="margin-top: -10px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
			data-toggle="collapse" data-target="#bs-megadropdown-tabs">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a id="second-logo" class="navbar-brand" style="margin-top: -5px; href="<?php base_url();?>">
				<img src="<?php echo base_url("assets/images/BUK.png"); ?>" class="img-responsive" alt="Logo" style="width: 150px; height: 40px;">
			</a>
			<a id="second-logo">
				<span style="color: #827717; margin-left: 60px; margin-top: 13px;" class="glyphicon glyphicon-shopping-cart fa-3x-colapse" aria-hidden="true"></span>
				<span class="badge" style="margin-left: -10px; margin-top: -40px;"><?php echo $jumlah_keranjang; ?></span>
			</a>
		</div>
		
		<nav class="collapse navbar-collapse"  id="bs-megadropdown-tabs">
			<div class="row" id="second-form">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<form class="navbar-form navbar-left" role="search">
						<div class="input-group">
							<input type="text" class="form-control" style=" width: 100%; border-radius: 0px;" placeholder="Cari Sembako di Bukmar... ">
							<span class="input-group-btn">
								<button class="btn btn-default" style="border-radius: 0px;" type="button">
								<span style="color: #827717;" class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			
			<!-- <ul id="second-cart" class="nav navbar-nav navbar-left">
				
			</ul> -->

			<ul class="nav navbar-nav">
				<li><a href="#top">Beranda</a></li>
				<li class="dropdown mega-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="">Sembako&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu mega-dropdown-menu row">
						<div class="megamenu-headline">
							<p style="font-style: normal;"><h2><small>Paket Sembako</small></h2></p>
						</div>
						<li class="divider"></li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Paket 1</li>
								<div class="panel panel-default" style="border-radius: 0px;">
									<div class="panel-body">
									<a href="<?php echo base_url(); ?>index.php/home/detail_produk_paket">
										<img class="dropdown-img-sembako" src="<?php echo base_url('assets/images/paket1.jpg'); ?>">
									</a>
										<div class="dropdown-detail-sembako">
											<p style="margin-top: -4px;">
												<h4 style="color: red; font-size: 15px; font-weight: bold;">Rp. 50.000,-</h4>
											</p>
											<p style="margin-top: -4px;">
												<h5><small><s>Rp. 50.000</s></small></h5>
												<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
											</p>
										</div>
									</div>
								</div>
								<li class="divider"></li>
								<li class="dropdown-header">Keterangan</li>
								<li><a href="#">1x Sarimi Rebus</a></li>
								<li><a href="#">1x Indomie Goreng</a></li>
								<li><a href="#">1Kg Gula Pasir</a></li>
								<li><a href="#">1x Teh Gopek</a></li>
								<li><a href="#">4Kg Beras</a></li>
								<li><a href="#">1Kg Telur Ayam</a></li>
								<li><a href="#">1x Garam Revin</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Paket 2</li>
								<div class="panel panel-default" style="border-radius: 0px;">
									<div class="panel-body">
									<a href="<?php echo base_url(); ?>index.php/home/detail_produk_paket">
										<img class="dropdown-img-sembako" src="<?php echo base_url('assets/images/paket2.jpg'); ?>">
									</a>
										<div class="dropdown-detail-sembako">
											<p style="margin-top: -4px;">
												<h4 style="color: red; font-size: 15px; font-weight: bold;">Rp. 50.000,-</h4>
											</p>
											<p style="margin-top: -4px;">
												<h5><small><s>Rp. 50.000</s></small></h5>
												<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
											</p>
										</div>
									</div>
								</div>
								<li class="divider"></li>
								<li class="dropdown-header">Keterangan</li>
								<li><a href="#">4Kg Beras</a></li>
								<li><a href="#">4x 1 liter Minyak Goreng</a></li>
								<li><a href="#">2Kg Telur Ayam</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Paket 3</li>
								<div class="panel panel-default" style="border-radius: 0px;">
									<div class="panel-body">
									<a href="<?php echo base_url(); ?>index.php/home/detail_produk_paket">
										<img class="dropdown-img-sembako" src="<?php echo base_url('assets/images/paket3.jpg'); ?>">
									</a>	
										<div class="dropdown-detail-sembako">
											<p style="margin-top: -4px;">
												<h4 style="color: red; font-size: 15px; font-weight: bold;">Rp. 50.000,-</h4>
											</p>
											<p style="margin-top: -4px;">
												<h5><small><s>Rp. 50.000</s></small></h5>
												<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
											</p>
										</div>
									</div>
								</div>
								<li class="divider"></li>
								<li class="dropdown-header">Keterangan</li>
								<li><a href="#">1x Sarimi Rebus</a></li>
								<li><a href="#">1x Indomie Goreng</a></li>
								<li><a href="#">1Kg Gula Pasir</a></li>
								<li><a href="#">1x Teh Celup</a></li>
								<li><a href="#">4Kg Beras</a></li>
								<li><a href="#">1Kg Telur Ayam</a></li>
								<li><a href="#">1x Garam Revina</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Paket 4</li>
								<div class="panel panel-default" style="border-radius: 0px;">
									<div class="panel-body">
									<a href="<?php echo base_url(); ?>index.php/home/detail_produk_paket">
										<img class="dropdown-img-sembako" src="<?php echo base_url('assets/images/paket2.jpg'); ?>">
									</a>	
										<div class="dropdown-detail-sembako">
											<p style="margin-top: -4px;">
												<h4 style="color: red; font-size: 15px; font-weight: bold;">Rp. 50.000,-</h4>
											</p>
											<p style="margin-top: -4px;">
												<h5><small><s>Rp. 50.000</s></small></h5>
												<h5 style="margin-left: 60px; margin-top: -25px;"><small>80%</small></h5>
											</p>
										</div>
									</div>
								</div>
								<li class="divider"></li>
								<li class="dropdown-header">Keterangan</li>
								<li><a href="#">4Kg Beras</a></li>
								<li><a href="#">4x 1 liter Minyak Goreng</a></li>
								<li><a href="#">2Kg Telur Ayam</a></li>
								<li class="divider"></li>
								<a href="#" class="btn btn-primary btn-block">Lihat Penawaran Menarik Dari Kami!</a>
							</ul>
						</li>
					</ul>
				</li>
				<!-- <li class="dropdown mega-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="">Minimarket &nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu mega-dropdown-menu row">
						<div class="megamenu-headline">
							<h2>ODC VEGETABLES STORE</h2>
						</div>
						<li class="divider"></li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Dresses</li>
								<li><a href="#">Unique Features</a></li>
								<li><a href="#">Image Responsive</a></li>
								<li><a href="#">Auto Carousel</a></li>
								<li><a href="#">Newsletter Form</a></li>
								<li><a href="#">Four columns</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Tops</li>
								<li><a href="#">Good Typography</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Dresses</li>
								<li><a href="#">Unique Features</a></li>
								<li><a href="#">Image Responsive</a></li>
								<li><a href="#">Auto Carousel</a></li>
								<li><a href="#">Newsletter Form</a></li>
								<li><a href="#">Four columns</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Tops</li>
								<li><a href="#">Good Typography</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Jackets</li>
								<li><a href="#">Easy to customize</a></li>
								<li><a href="#">Glyphicons</a></li>
								<li><a href="#">Pull Right Elements</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Pants</li>
								<li><a href="#">Coloured Headers</a></li>
								<li><a href="#">Primary Buttons & Default</a></li>
								<li><a href="#">Calls to action</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Accessories</li>
								<li><a href="#">Default Navbar</a></li>
								<li><a href="#">Lovely Fonts</a></li>
								<li><a href="#">Responsive Dropdown </a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Newsletter</li>
								<form class="form" role="form">
									<div class="form-group">
										<label class="sr-only" for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
									<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								</form>
							</ul>
						</li>
					</ul>
				</li> -->
				<!-- <li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Affiliate
						<b class="caret"></b>
					</a>
				</li> -->
				</ul><!-- /.nav -->
				<ul class="nav navbar-nav">
					<li class="dropdown" id="nav-fashion" style="display: none;">
						<a class="dropdown-toggle" data-toggle="dropdown">Fashion <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
					<!--
					<li class="dropdown" id="nav-bayi-dan-anak">
							<a class="dropdown-toggle" data-toggle="dropdown" id="nav-fashion">F <b class="caret"></b></a>
							<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
							</ul>
					</li>
					-->
				</ul>
				</nav><!--/.nav-collapse -->
				</div><!-- /.container -->
				</nav><!-- /.nav-inner -->
				<script type="text/javascript">
					// Dropdown Menu Fade
					jQuery(document).ready(function(){
						$(".dropdown").click(
						function() {
							$('.dropdown-menu', this).fadeIn("fast");
						},
						function() {
							$('.dropdown-menu', this).fadeOut("fast");
							}
						);
					});
				</script>