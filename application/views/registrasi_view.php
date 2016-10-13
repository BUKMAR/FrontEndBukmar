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
                    <h2 class="text-center" style="margin-top: -15px;"><strong><small>DAFTAR GRATIS DI BUKMAR</small></strong></h2>
                </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
							</li>
							<li role="presentation">
								<a href="#register" aria-controls="tab" role="tab" data-toggle="tab">Daftar</a>
							</li>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="login" style="border: 1px dotted #C2C2C2; padding: 15px;">
								<!-- bagian login -->
								<form role="form" class="form-horizontal">
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">
										User name</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email1" placeholder="User name" />
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1" class="col-sm-2 control-label">
										Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" />
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
							<div role="tabpanel" class="tab-pane" id="register" style="border: 1px dotted #C2C2C2; padding: 15px;">
								<form role="form" class="form-horizontal">
									<div class="form-group">
										<label for="nama-lengkap" class="col-sm-3 control-label">
										Nama Lengkap</label>
										<div class="col-sm-8">
											<input type="text" name="nama-lengkap" class="form-control" required="required" placeholder="Nama Lengkap">
										</div>
									</div>
									<div class="form-group">
										<label for="nomor-handphone" class="col-sm-3 control-label">
										Nomor Handphone</label>
										<div class="col-sm-8">
											<input type="text" name="nomor-handphone" class="form-control" required="required" placeholder="Nomor Handphone">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-3 control-label">
										Alamat Email</label>
										<div class="col-sm-8">
											<input type="text" name="email" class="form-control" required="required" placeholder="Alamat Email">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-3 control-label">
										Kata Sandi</label>
										<div class="col-sm-8">
											<input type="password" name="password" class="form-control" required="required" placeholder="Kata Sandi">
										</div>
									</div>
									<div class="form-group">
										<label for="confir-password" class="col-sm-3 control-label">
										Ulang Kata Sandi</label>
										<div class="col-sm-8">
											<input type="text" name="confir-password" class="form-control" required="required" placeholder="Ulang Kata Sandi">
										</div>
									</div>
									<div class="form-group">
										<label for="jenis-kelamin" class="col-sm-3 control-label">
										Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="radio">
												<label>
													<input type="radio" name="jenis-kelamin" id="input" value="Pria" checked="checked">
													Pria
												</label>
												&nbsp;
												<label>
													<input type="radio" name="jenis-kelamin" id="input" value="Wanita" >
													Wanita
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="tanggal-lahir" class="col-sm-3 control-label">
										Tanggal Lahir</label>
										<div class="col-sm-8">
											<div class="row">
												<div class="col-sm-4">
													<select name="tgl-lahir" class="form-control" required="required">
														<option value=""></option>
													</select>
												</div>
												<div class="col-sm-4">
													<select name="tgl-lahir" class="form-control" required="required">
														<option value=""></option>
													</select>
												</div>
												<div class="col-sm-4">
													<select name="tgl-lahir" class="form-control" required="required">
														<option value=""></option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-8">
											<p><small>Dengan menekan Daftar Akun, saya mengkonfirmasi telah menyetujui Syarat dan Ketentuan serta Kebijakan Privasi Bukmar</small></p>
										</div>
									</div>
									
									<div class="row">
										<div class="col-sm-3">
										</div>
										<div class="col-sm-8">
											<button type="button" class="btn btn-block btn-primary btn-sm">
											Daftar Akun</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="OR" class="hidden-xs">OR</div>
				</div>

				<div class="col-md-4">
					<div class="row text-center sign-with">
						<div class="col-md-12">
							<h3>
							Sign in with</h3>
						</div>
						<div class="col-md-12">
							<div class="btn-group btn-group-justified">
								<a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
							Google</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>