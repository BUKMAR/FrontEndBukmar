<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/datetime/moment/min/moment.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/datetime/datetimepicker/build/js/bootstrap-datetimepicker.min.js"); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/datetime/datetimepicker/build/css/bootstrap-datetimepicker.min.css"); ?>" />
	
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="#" style="margin-top: -10px; display: block;"><img src="<?php echo base_url("assets/images/MAR.png"); ?>" alt="Logo" style="width: 150px; height: 40px;"></a>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row" style="margin-top: 60px;">
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<label for="troli" style="margin: 15px; font-size: 18px;"> <span class="glyphicon glyphicon-time"></span> Checkout</label>
				<form action="" method="POST" role="form">
				
					<div class="form-group">
						<label>Waktu Pengiriman</label>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="form-group">
	                <div class='input-group date' id='datetimepicker1'>
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<script type="text/javascript">
											$(function () {
												$('#datetimepicker1').datetimepicker();
											});
										</script>
	                </div>
            		</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Selesai Belanja</button>
					</div>
					
				</form>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
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