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
							<div role="tabpanel" class="tab-pane" id="login" style="border: 1px dotted #C2C2C2; padding: 15px;">
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
							<div role="tabpanel" class="tab-pane active" id="register" style="border: 1px dotted #C2C2C2; padding: 15px;">
								<form role="form" class="form-horizontal">
									<div class="form-group">
										<label for="username" class="col-sm-3 control-label">
										User Name</label>
										<div class="col-sm-8">
											<input type="text" name="username" class="form-control" required="required" placeholder="User Name">
										</div>
									</div>
									<div class="form-group">
										<label for="nama-lengkap" class="col-sm-3 control-label">
										Nama Lengkap</label>
										<div class="col-sm-8">
											<input type="text" name="nama-lengkap" class="form-control" required="required" placeholder="Nama Lengkap">
										</div>
									</div>
									<div class="form-group">
										<label for="alamat" class="col-sm-3 control-label">
										Alamat</label>
										<div class="col-sm-8">
											<textarea name="alamat_member" id="alamat_member" class="form-control" rows="3" placeholder="Alamat Lengkap" required="required"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="Kelurahan" class="col-sm-3 control-label">
										Kelurahan</label>
										<div class="col-sm-8">
											<input type="text" name="kelurahan" class="form-control" required="required" placeholder="Kelurahan">
										</div>
									</div>
									<div class="form-group">
										<label for="kecamatan" class="col-sm-3 control-label">
										Kecamatan</label>
										<div class="col-sm-8">
											<input type="text" name="kecamatan" class="form-control" required="required" placeholder="Kecamatan">
										</div>
									</div>
									<div class="form-group">
										<label for="kabupaten" class="col-sm-3 control-label">
										Kabupaten</label>
										<div class="col-sm-8">
											<input type="text" name="kabupaten" class="form-control" required="required" placeholder="Kabupaten">
										</div>
									</div>
									<div class="form-group">
										<label for="provinsi" class="col-sm-3 control-label">
										Provinsi</label>
										<div class="col-sm-8">
											<input type="text" name="provinsi" class="form-control" required="required" placeholder="Provinsi">
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
										<label for="jumlah-anggota" class="col-sm-3 control-label">
										Jumlah Anggota Keluarga</label>
										<div class="col-sm-8">
											<input type="number" name="jumlah-anggota" class="form-control" required="required" placeholder="Jumlah Anggota">
										</div>
									</div>
									<div class="form-group">
										<label for="pekerjaan" class="col-sm-3 control-label">
										Pekerjaan</label>
										<div class="col-sm-8">
											<input type="text" name="pekerjaan" class="form-control" required="required" placeholder="Pekerjaan">
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
												<div class="col-sm-3 col-md-3">
													<select name="tgl-lahir" class="form-control" required="required">
														<?php for ($i = 1; $i <= 31; $i++): ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php endfor ?>
															<option value="00" selected="selected">Tanggal</option>
													</select>
												</div>
												<div class="col-sm-4 col-md-4">
													<select name="tgl-lahir" class="form-control" required="required">
														<?php $bulan = array('Januari', 'Febuary', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
															'Agustus', 'September', 'November', 'Desember');
														$count = count($bulan);
														for ($i = 0; $i < $count; $i++): ?>
															<option value="<?php echo $bulan[$i]; ?>"><?php echo $bulan[$i]; ?></option>
														<?php endfor ?>
															<option value="00" selected>Bulan</option>
													</select>
												</div>
												<div class="col-sm-5 col-md-5">
													<select name="tgl-lahir" class="form-control" required="required">
														<?php 
																$currently_select = date('Y');
																$earliest_year = 1950;
																$latest_year = date('Y');
														 ?>
														 <?php foreach (range( $latest_year, $earliest_year ) as $i):
														 		print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
														  endforeach ?>
														  <option value="00" selected>Tahun</option>
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