<!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
	</head>
	<body>
		<?php require_once(APPPATH .'views/member/template/menu_nav.php'); ?>
		<div class="container-fluid">
			<div class="side-body">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend><h1><small><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register</small></h1></legend>
				</div>
				<form action="submit_tambah_register" method="POST" role="form" class="form-horizontal">
					<div class="form-group">
						<label for="id-referensi" class="col-sm-3 control-label">
						Id Referensi</label>
						<div class="col-sm-8">
							<select name="id-referensi" id="inputId-Ref" class="form-control" required="required">
								<option value=""></option>
								<option value="0" selected>Id Referensi</option>
							</select>
						</div>
					</div>
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
							<textarea name="alamat-member" id="alamat-member" class="form-control" rows="3" placeholder="Alamat Lengkap" required="required"></textarea>
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
							<input type="text" name="alamat-email" class="form-control" required="required" placeholder="Alamat Email">
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
									<select name="tanggal-lahir" class="form-control" required="required">
										<?php for ($i = 1; $i <= 31; $i++): ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor ?>
										<option value="00" selected="selected">Tanggal</option>
									</select>
								</div>
								<div class="col-sm-4 col-md-4">
									<select name="bulan-lahir" class="form-control" required="required">
										<?php for ($i = 1; $i <= 12; $i++): ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor ?>
										<option value="00" selected>Bulan</option>
									</select>
								</div>
								<div class="col-sm-5 col-md-5">
									<select name="tahun-lahir" class="form-control" required="required">
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
							<button type="submit" class="btn btn-block btn-primary btn-sm">
							Daftar Akun</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>