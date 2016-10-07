<!DOCTYPE html>
<html>
<head>
    <?php require_once(APPPATH .'views/include/include.php'); ?>
    <style type="text/css">
    	.navbar {
    		margin-bottom: 0px;
    	}
    </style>
</head>
<body screen_capture_incject="true">
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
						<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"><span class="badge" style="margin-bottom: 0px; margin-top: -20px; margin-left: -2px; background-color: red; color: #000;">35</span></span></a></li>
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
	
	<br>
	<br>
	<br>
	<footer id="footerWrapper" class="footer2">
	<section id="mainFooter">
		<div class="container">
			<div class="row">
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
			<div class="row">
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