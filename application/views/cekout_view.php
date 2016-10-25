<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="#" style="margin-top: -10px; margin-left:-70px; display: block;"><img src="<?php echo base_url("assets/images/MAR.png"); ?>" alt="Logo" style="width: 150px; height: 40px;"></a>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row" style="margin-top: 60px;">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label for="troli" style="margin: 15px; font-size: 18px;"> <span class="glyphicon glyphicon-time"></span> Checkout</label>
				<form action="" method="POST" role="form">
				
					<div class="form-group">
						<label>Waktu Pengiriman</label>
						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<div class="input-group clockpicker">
								   <input type="text" class="form-control" value="09:30">
								   <span class="input-group-addon">
								      <span class="glyphicon glyphicon-time"></span>
								   </span>
								</div>
							</div>
							<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<select name="waktu" id="inputWaktu" class="form-control" required="required">
									<option value="Pagi">Pagi</option>
									<option value="Siang">Siang</option>
									<option value="Sore">Sore</option>
									<option value="Malam">Malam</option>
								</select>
							</div>
						</div>
					</div>

					<br>
					<button type="submit" class="btn btn-primary">Selesai Belanja</button>
				</form>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<label for="troli" style="margin: 15px; font-size: 18px;">Daftar belanja anda</label>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nama Produk</th>
								<th>Kuantitas</th>
								<th>Harga</th>
								<th>Diskon</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>