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

	    .slider {
	        width: 95%;
	        margin: 0px auto;
	        margin-top: 40px;
	    }

	    .slick-slide {
	      margin: 0px 0px;
	    }

	    .slick-slide img {
	      width: 350px;
	      height: 220px;
	    }

	    .row {
	    	background-color: #ffffff;
	    	height: 290px;
	    	padding-bottom: 0px;
	    }

	    .isi h2 {
	    	padding-left: 35px;
	    }
    </style>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>  
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
 	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css
">
</head>
<body screen_capture_incject="true" style="background-color: #dedede;">
	<div id="skippy">
	</div>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
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
						<li><a href="#">Keranjang Belanja</a></li>
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
				<img class="image-slide" style="height: 550px;" width="100%" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="<?php echo base_url("assets/images/blue.jpg"); ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1>Example headline.</h1>
						<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="image-slide" style="height: 550px;" width="100%" data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?php echo base_url("assets/images/purple.jpg"); ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img class="image-slide" style="height: 550px;" width="100%" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="<?php echo base_url("assets/images/red.jpg"); ?>">
				<div class="container">
					<div class="carousel-caption">
						<h1>One more for good measure.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<div class="isi">
		<h2 style="font-family: Roboto, sans-serif;">Brands</h2>
		<div class="row slick ">
		  <section class="center slider">
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		  </section>
		</div>
	</div>
	<div class="isi">
		<h2 style="font-family: Roboto, sans-serif;">Produk Terlaris</h2>
		<div class="row slick ">
		  <section class="center slider">
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/blue.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		    <div>
		      <img src="<?php echo base_url("assets/images/red.jpg"); ?>">
		    </div>
		  </section>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	$(function() {
	      $(".center").slick({
		       dots: true,
		       infinite: true,
		       centerMode: true,
		       slidesToShow: 3,
		       slidesToScroll: 3
	      });
	      $('.carousel-content').slick({
		       prevArrow:"sjdns",
		       nextArrow:"dsbndsh"
  		  });
	    });
  	</script>
</body>
</html>