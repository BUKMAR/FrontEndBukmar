<!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
	</head>
	<body>
		<?php require_once(APPPATH .'views/member/template/menu_nav.php'); ?>
		<!-- Main Content -->
		<div class="container-fluid">
			<div class="side-body">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend><h1><small><span class="glyphicon glyphicon-book" aria-hidden="true"></span> History Bonus</small></h1></legend>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#tabel-paket" aria-controls="tab" role="tab" data-toggle="tab">Tabel Paket</a>
								</li>
								<li role="presentation">
									<a href="#tabel-non-paket" aria-controls="tab" role="tab" data-toggle="tab">Tabel Non Paket</a>
								</li>
							</ul>
						
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="tabel-paket">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Tgl</th>
													<th>Nama Paket</th>
													<th>Qty</th>
													<th>Bonus Paket</th>
													<th>Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>01</td>
													<td>01</td>
													<td>Paket 1</td>
													<td>2</td>
													<td>3000</td>
													<td>5000</td>
												</tr>
												<tr>
													<td colspan="5"><strong>Total Bonus<strong></td>
													<td>100000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="tabel-non-paket">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Tgl</th>
													<th>Nama Item</th>
													<th>Qty</th>
													<th>Bonus Paket</th>
													<th>Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>01</td>
													<td>01</td>
													<td>Kopi Tora Bika 20gr</td>
													<td>2</td>
													<td>3000</td>
													<td>5000</td>
												</tr>
												<tr>
													<td colspan="5"><strong>Total Bonus<strong></td>
													<td>100000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>