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

			<ul class="nav navbar-nav">
				<li><a href="#top">Beranda</a></li>
				<li class="dropdown mega-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="">Sembako&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu mega-dropdown-menu row">
						<div class="megamenu-headline">
							<p style="font-style: normal;"><h2><small>Paket Sembako</small></h2></p>
						</div>
						<li class="divider"></li>
						<?php 
							if(isset($barang_paket)) {
								$i = 1;

								foreach($barang_paket as $item) {
									if($i < count($barang_paket)) { ?>
										<li class="col-sm-3">
											<ul>
												<li class="dropdown-header"><?php echo $item['nama_paket']; ?></li>
												<div class="panel panel-default" style="border-radius: 0px;">
													<div class="panel-body">
													<a href="<?php echo base_url('index.php/home/detail_produk_paket?id_produk='. $item['id_barang_paket']); ?>">
														<img class="dropdown-img-sembako" src="<?php echo base_url($item['foto_barang']); ?>">
													</a>	
														<div class="dropdown-detail-sembako">
															<p style="margin-top: -4px;">
																<h4 style="color: red; font-size: 15px; font-weight: bold;">
																<?php 
																	echo 
																	"Rp. ". number_format($item['harga_jual'], 0, ".", ".");
																?>
																</h4>
															</p>
															<?php if(!empty($item['diskon'])) { ?>
																<p style="margin-top: -4px;">
																	<h5><small><s>Rp. 50.000</s></small></h5>
																	<h5 style="margin-left: 60px; margin-top: -25px;">
																	<small>80%</small></h5>
																</p>
															<?php } ?>
														</div>
													</div>
												</div>
												<li class="divider"></li>
												<li class="dropdown-header">Keterangan</li>
												<li><a href="#"><?php echo $item['keterangan']; ?></a></li>
											</ul>
										</li>
									<?php } else { ?>
										<li class="col-sm-3">
											<ul>
												<li class="dropdown-header"><?php echo $item['nama_paket']; ?></li>
												<div class="panel panel-default" style="border-radius: 0px;">
													<div class="panel-body">
													<a href="<?php echo base_url('index.php/home/detail_produk_paket?id_produk='. $item['id_barang_paket']); ?>">
														<img class="dropdown-img-sembako" src="<?php echo base_url($item['foto_barang']); ?>">
													</a>	
														<div class="dropdown-detail-sembako">
															<p style="margin-top: -4px;">
																<h4 style="color: red; font-size: 15px; font-weight: bold;">
																<?php 
																	echo 
																	"Rp. ". number_format($item['harga_jual'], 0, ".", ".");
																?>
																</h4>
															</p>
															<?php if(!empty($item['diskon'])) { ?>
																<p style="margin-top: -4px;">
																	<h5><small><s>Rp. 50.000</s></small></h5>
																	<h5 style="margin-left: 60px; margin-top: -25px;">
																	<small>80%</small></h5>
																</p>
															<?php } ?>
														</div>
													</div>
												</div>
												<li class="divider"></li>
												<li class="dropdown-header">Keterangan</li>
												<li><a href="#"><?php echo $item['keterangan']; ?></a></li>
												<li class="divider"></li>
												<a href="#" class="btn btn-primary btn-block">
												Lihat Penawaran Menarik Dari Kami!</a>
											</ul>
										</li>
									<?php }

									$i++;
								}

							} else {
								print_r($barang_paket);
							}
						?>
					</ul>
				</li>
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