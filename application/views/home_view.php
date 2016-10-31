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
			<?php require_once(APPPATH .'views/templates/first_nav.php'); ?>
			<?php require_once(APPPATH .'views/templates/navigasi.php'); ?>
		</header><!-- /header -->

		<?php //require_once(APPPATH .'views/templates/slide_show.php'); ?>
		
		<!-- slide content -->

		<!-- <div class="isi">

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
		</div> -->

		<!-- Produk Terlaris -->
		<!-- <div class="isi">
			<div class="label-containter" style="border-bottom: 4px solid #689F38;">
				<div class="label bg-green">
					<h3 style="text-align: left;" class="label-title"><img class="img-label" src="<?php echo base_url("assets/images/bm.png"); ?>"/> Produk Terlaris</h3>
				</div>
			</div>

			<div class="slider-row slick ">
				<section class="center slider">
					<div class="panel panel-default" style="margin-right: 6px; border-radius: 0px;">
						<div class="panel-body" style="height: 320px;">
							<a href="<?php echo base_url('index.php/home/detail_produk_satuan'); ?>">
								<img class="img-responsive" style="height: 205px; width: 186px;" src="<?php echo base_url('assets/images/s/teh_2s.png'); ?>" />
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
		</div> -->

		<!-- SEMUA PRODUK -->
		<div class="isi">
			<div class="label-containter" style="border-bottom: 4px solid #1976D2;">
				<div class="label bg-blue">
					<h3 style="text-align: left;" class="label-title"><img class="img-label" src="<?php echo base_url("assets/images/bm.png"); ?>"/> Semua Produk</h3>
				</div>
			</div>
			<div>
				<div class="big-produk">
					<?php 
						$idx = 0;
						$per_page = 16;
						$column = 8 
					?>
					<?php for ($i = 0; $i < ($per_page / $column); $i++): ?>
						<div class="row" style="padding: 10px; margin-top: 10px;">
							<?php for ($j = 0; $j < $column; $j++): ?>
							<?php 
								if (array_key_exists($idx, $barang_satuan)) {
									$barang = $barang_satuan[$idx];
									?>
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<div class="panel panel-default" style="border-radius: 0px; height: 360px;">
											<div class="panel-body">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<a 
														href="
														<?php 
															echo base_url('index.php/home/detail_produk?id_produk='. $barang->id_barang_satuan); 
														?>" title="" style="text-decoration:none"
															class="img-responsive" alt="Image" height="800" width="500">
															<img src="
															<?php 
															if(isset($barang->foto_barang)) {
																echo base_url($barang->foto_barang); 
															} else {
																echo "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdhMjNkZGY1ZiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2EyM2RkZjVmIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY5NTMxMjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=";
															}
															?>" class="img-responsive" alt="Image" height="800" width="500">
														</a>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" 
													style="margin-top: -15px;">
														<h4><small><?php echo $barang->nama_barang; ?></small></h4>
														<p style="margin-top: -4px;">
															<?php 
																$harga_jual = "Rp. ". number_format($barang->harga_jual, 0, ".", ".");
															?>
															<h4 style="font-size: 18px;"><?php echo $harga_jual; ?></h4>
														</p>
														<?php 
															if(!empty($barang->diskon)) {
																?>
																	<p style="margin-top: -4px;">
																	<h5><small><s style="color: red;">Rp. 50.000</s></small></h5>
																	<h5 style="margin-left: 60px; margin-top: -25px;">
																	<small><?php echo $barang->diskon ?></small></h5>
																	</p>
																<?php
															}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
									$idx++;
								}
							?>
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
							<?php
								for($i = 1; $i <= $jumlah_link; $i++) {
									echo "<li><a href='#''>$i</a></li>";
								}
							?>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<br>
		<br>
		<!-- footer -->
		<?php require_once(APPPATH .'views/templates/footer.php'); ?>


		<!-- javascript costume -->
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

	</body>
</html>