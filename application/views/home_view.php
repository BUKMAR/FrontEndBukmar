<!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
		<style type="text/css">
			.navbar {
				margin-bottom: 0px;
			}
			* {
			box-sizing: border-box;
			}
			.slider-row {
				background-color: #ffffff;
				padding-bottom: 0px;
				padding-top: 10px;
				padding-bottom: 10px;
				padding-left: 10px;
				padding-right: 10px;
			}
			.slider-row img {
				height: 320px;
				width: 220px;
				margin-right: 9px;
			}
			.isi h2 {
				padding-left: 35px;
			}
			.panel-body a:hover {
				text-decoration: none;
			}
		</style>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css
			">
			<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<script src="jQuery.loadScroll.js"></script>
	</head>
	<body screen_capture_incject="true" style="background-color: #fff;">
		<div id="skippy">
		</div>
		<header>
			<nav id="first-nav" class="navbar navbar-default" role="navigation">
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
					<a id="first-logo" class="navbar-brand" href="#">
						<a class="navbar-brand" href="#" style="margin-top: -5px; margin-left: -30px;"><img src="<?php echo base_url("assets/images/BUK.png"); ?>" class="img-responsive" alt="Logo" style="width: 150px; height: 40px;"></a>
					</a>
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
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"><span class="badge" style="margin-bottom: 0px; margin-top: -20px; margin-left: -2px; background-color: red; color: #fff;">35</span></span></a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<?php require_once(APPPATH .'views/templates/navigasi.php'); ?>
		</header><!-- /header -->
		<div id="carousel-id" class="carousel slide" style="height: 550px;" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img class="image-slide" style="height: inherit; width: inherit;" alt="First slide" src="<?php echo base_url("assets/images/slide1.jpg"); ?>">
					<div class="container">
						<div class="carousel-caption">
							<!-- <h1>Example headline.</h1>
							<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
						</div>
					</div>
				</div>
				<div class="item">
					<img class="image-slide" style="height: inherit; width: inherit;" alt="First slide" src="<?php echo base_url("assets/images/slide2.jpg"); ?>">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item active">
					<img class="image-slide" style="height: inherit; width: inherit;" alt="First slide" src="<?php echo base_url("assets/images/slide3.jpg"); ?>">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<div class="isi">
			<div class="label-containter">
				<div class="label">
					<h3 style="text-align: left;" class="label-title">
					<img class="img-label" src="<?php echo base_url("assets/images/bm.png"); ?>"/> All Brands</h3>
				</div>
			</div>
			<div class="slider-row slick">
				<section class="center slider">
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/blue.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" class="img-responsive"  src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/blue.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/blue.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
					<div>
						<img class="img-responsive" src="<?php echo base_url("assets/images/red.jpg"); ?>">
					</div>
				</section>
			</div>
		</div>
		<!-- Produk Terlaris -->
		<div class="isi">
			<div class="label-containter" style="border-bottom: 4px solid #689F38;">
				<div class="label bg-green">
					<h3 style="text-align: left;" class="label-title"><img class="img-label" src="<?php echo base_url("assets/images/bm.png"); ?>"/> Produk Terlaris</h3>
				</div>
			</div>
			<div class="slider-row slick ">
				<section class="center slider">
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
													src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
													src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
													src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
									src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
									src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
									src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
									src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>
					<div class="panel panel-default" style="margin-right: 6px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;"
									src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
								<div>
									<h4><small>Nama Barang</small></h4>
									<h4 style="color: red; margin-top: -4px;">Rp. 50.000,-</h4>
									<h5><small><s>Rp. 50.000</s></small></h5>
									<h5 style="margin-left: 60px; margin-top: -4px; margin-top: -25px;"><small>80%</small></h5>
								</div>
							</a>
						</div>
					</div>

				</section>
			</div>
		</div>

		<!-- SEMUA PRODUK -->
		<div class="isi">
			<div class="label-containter" style="border-bottom: 4px solid #1976D2;">
				<div class="label bg-blue">
					<h3 style="text-align: left;" class="label-title"><img class="img-label" src="<?php echo base_url("assets/images/bm.png"); ?>"/> Semua Produk</h3>
				</div>
			</div>
			<div>
				<div class="big-produk">
					<?php for ($i = 0; $i < 6; $i++): ?>
						<div class="row" style="padding: 10px; margin-top: 10px;">
							<?php for ($j = 0; $j < 6; $j++): ?>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>" title="" style="text-decoration:none">
													<img data-src="<?php echo base_url("assets/images/blue.jpg"); ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdhMjNkZGY1ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2EyM2RkZjVmIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY5NTMxMjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="img-responsive" alt="Image" width="500">
												</a>
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
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endfor ?>
						</div>
					<?php endfor ?>
				</div>
				<div class="small-produk">
					<?php for ($i = 0; $i < 2; $i++): ?>
						<div class="row" style="padding: 10px; margin-top: 10px;">
							<?php for ($j = 0; $j < 2; $j++): ?>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>" title="" style="text-decoration:none">
													<img data-src="<?php echo base_url("assets/images/blue.jpg"); ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdhMjNkZGY1ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2EyM2RkZjVmIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY5NTMxMjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" class="img-responsive" alt="Image" width="500">
												</a>
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
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endfor ?>
						</div>
					<?php endfor ?>
				</div>
				<div class="row">
					<div class="col-md-12" style="text-align: center;">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				$('.slider').slick({
					slidesToScroll: 4,
					slidesToShow: 4, variableWidth: true, infinite: true
				});
				
				checkSize();
				$(window).resize(checkSize);
			});

			function checkSize(){
				if ($(".a").css("background-color") == "rgb(255, 255, 255)"){
					$(".a").css({
						"height": "120px",
						"width": "120px"
					});
					
					$('.slider').slick({
						slidesToScroll: 2,
						slidesToShow: 2, variableWidth: true, infinite: true
					});
				}
			}
		</script>
		<br>
		<br>
		<br>
		<footer id="footerWrapper" class="footer2" style="margin-top: 145px;">
			<section id="mainFooter">
				<div class="container">
					<div class="row" style="background-color: #222;">
						<div class="col-md-3 col-sm-6">
							<div class="footerWidget">
								<img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="latest Little Neko news" id="footerLogo">
								<p align="justify"><a href="http://www.little-neko.com" title="Little Neko, website template creation">BUKMAR</a> Halaman Merupakan sarana berbagi informasi update kebutuhan harian dapur anda, sebagai penyedia layanan, kami menjamin pengalaman belanja yang aman, terpercaya, dan pastinya gak ribet. Dapatkan penawaran terbaik melalui website kapan saja. </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="footerWidget">
								<h3>Latest works</h3>
								<ul class="list-unstyled worksList">
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works1.jpg" alt="works"></a></li>
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works3.jpg" alt="works"></a></li>
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works5.jpg" alt="works"></a></li>
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works2.jpg" alt="works"></a></li>
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works4.jpg" alt="works"></a></li>
									<li><a href="#" class="tips" title="Little Neko work"><img src="http://seattle-bootstrap3-website-template.little-neko.com/v1/images/theme-pics/works6.jpg" alt="works"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="footerWidget">
								<h3>Latest news</h3>
								<ul class="list-unstyled iconList">
									<li><a href="#">Solace of a lonely highway</a></li>
									<li><a href="#">Write with purpose</a></li>
									<li><a href="#">Tree on a lake</a></li>
									<li><a href="#">Don’t stop questioning</a></li>
									<li><a href="#">Overheard this morning</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="footerWidget">
								<h3>Little BUKMAR</h3>
								<address>
									<p>
										<i class="icon-location"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></i>&nbsp;Widoro, Rt 40 Rw12 Sragen Wetan
															Sragen, Jawa Tengah, Indonesia<br>
										<i class="icon-phone"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></i>&nbsp;0857-2864-8065 <br>
										<i class="icon-mail-alt"></i>&nbsp;<a href="mailto:little@little-neko.com">bukmarwidoro@gmail.com</a>
										<i class="icon-mail-alt"> </i>&nbsp;<a href="mailto:little@little-neko.com">http://www.bukmar.com/</a>
									</p>
								</address>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="footerRights">
				<div class="container">
					<div class="row" style="background-color: #222; height: 90px;">
						<div class="col-md-12">
							<ul class="socialNetwork">
								<li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
								<li><a href="#" class="tips" title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
								<li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
								<li><a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
								<li><a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
							</ul>
						</div>
						<div class="col-md-12">
							<p>Copyright © 2014 <a href="http://www.little-neko.com" target="blank">Bukmar.com</a> / All rights reserved.</p>
						</div>
					</div>
				</div>
			</section>
		</footer>
	</body>
</html>