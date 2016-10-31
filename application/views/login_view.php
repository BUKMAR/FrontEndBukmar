 <!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
	</head>
	<style type="text/css" media="screen">
	.nav-tabs {
		margin-bottom: 15px;
	}
	.sign-with {
		margin-top: 25px;
		padding: 20px;
	}
	div#OR {
		height: 30px;
		width: 30px;
		border: 1px solid #C2C2C2;
		border-radius: 50%;
		font-weight: bold;
		line-height: 28px;
		text-align: center;
		font-size: 12px;
		float: right;
		position: absolute;
		right: -16px;
		top: 40%;
		z-index: 1;
		background: #DFDFDF;
	}

	.logo {
	    width: 145px;
	    margin: 0 auto;
	}

	.site-logo {
	    background: url("<?php echo base_url("assets/images/logo_1.png"); ?>") no-repeat transparent;
	    display: inline-block;
	}
	
	.site-logo img {
		width: 100px;
		height: 125px;
	}

	.mt-10 {
   	margin-top: 10px!important;
	}

	.row-fluid {
	    width: 100%;
	}

	</style>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row-fluid mt-10">
                    <div class="text-center mb-10">
                        <div class="logo">
                            <span class="site-logo"><img style="width: 350px; margin-left: -100px;" src="<?php echo base_url("assets/images/MAR.png"); ?>"></span>
                        </div>
                    </div>
                </div>
				</div>
			</div>
			<div class="row" style="margin-top: 100px;">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-body">
								<form action="<?php echo base_url('index.php/home/do_login'); ?>" method="POST" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
											User name</label>
											<div class="col-sm-10">
												<input type="email" name="username" class="form-control"  placeholder="User name" />
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1" class="col-sm-2 control-label">
											Password</label>
											<div class="col-sm-10">
												<input type="password" name="password" class="form-control"  placeholder="password" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary btn-md">
												Login</button>
												<a href="javascript:;">Kamu lupa password ?</a>
											</div>
										</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>