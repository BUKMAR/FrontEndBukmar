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
          <legend><h1><small><span class="glyphicon glyphicon-book" aria-hidden="true"></span> History Belanja</small></h1></legend>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<h1 align="center"><small>RIWAYAT BELANJA ANDA</small></h1>
        			<table border="0" style="margin: 20px;">
        				<tbody>
        					<tr>
        						<th>Kode Pelanggan</th>
        						<th>&nbsp; : &nbsp;</th>
        						<th>000000000000000</th>
        					</tr>
        					<tr>
        						<td>Nama Pelanggan</td>
        						<td>&nbsp; : &nbsp;</td>
        						<td>000000000000000</td>
        					</tr>
        					<tr>
        						<td>Alamat 1</td>
        						<td>&nbsp; : &nbsp;</td>
        						<td>000000000000000</td>
        					</tr>
        					<tr>
        						<td>Alamat 2</td>
        						<td>&nbsp; : &nbsp;</td>
        						<td>000000000000000</td>
        					</tr>
        				</tbody>
        			</table>
							
							<!-- center looping riwayat belanja -->

							<div class="row" style="border-top: 1px dotted #000; border-bottom: 1px dotted #000; padding: 5px;">
								<div class="col-md-4">
									<table border="0">
										<thead>
											<tr>
												<td>No. Faktur</td>
												<td> &nbsp; : &nbsp;</td>
												<td>FK-8071</td>
											</tr>
										</thead>
									</table>
								</div>
								<div class="col-md-5 col-md-offset-3">
									<table border="0">
										<thead>
											<tr>
												<td>Priode</td>
												<td> &nbsp; : &nbsp;</td>
												<td>01/01/2016 s/d 01/02/2016</td>
											</tr>
										</thead>
									</table>
								</div>
							</div>

        			<div class="table-responsive" style="margin-top: 15px; border: 1px dotted #000; padding: 10px;">
        				<table class="table table-hover">
        					<thead>
        						<tr>
        							<th align="center">Tgl</th>
        							<th align="center">No</th>
        							<th align="center">Nama Barang</th>
        							<th align="center">Qty</th>
        							<th align="center">Harga satuan</th>
        							<th align="center">Diskon</th>
        							<th align="center">Jumlah</th>
        						</tr>
        					</thead>
        					<tbody>
        						<tr>
        							<td>01</td>
        							<td>1</td>
        							<td>Paket 1</td>
        							<td>3</td>
        							<td>2000</td>
        							<td align="center">0%</td>
        							<td>25000</td>
        						</tr>
        						<tr>
        							<td>01</td>
        							<td>1</td>
        							<td>Paket 1</td>
        							<td>3</td>
        							<td>2000</td>
        							<td align="center">0%</td>
        							<td>25000</td>
        						</tr>
        						<tr>
        							<td colspan="5" align="right"><strong>Jumlah</strong></td>
        							<td>:</td>
        							<td>9500000</td>
        							
        						</tr>
        					</tbody>
        				</table>
        			</div>
        			<br>

        			<div class="row" style="border-top: 1px dotted #000; border-bottom: 1px dotted #000; padding: 5px;">
								<div class="col-md-4">
									<table border="0">
										<thead>
											<tr>
												<td>No. Faktur</td>
												<td> &nbsp; : &nbsp;</td>
												<td>FK-8071</td>
											</tr>
										</thead>
									</table>
								</div>
								<div class="col-md-5 col-md-offset-3">
									<table border="0">
										<thead>
											<tr>
												<td>Priode</td>
												<td> &nbsp; : &nbsp;</td>
												<td>01/01/2016 s/d 01/02/2016</td>
											</tr>
										</thead>
									</table>
								</div>
							</div>

        			<div class="table-responsive" style="margin-top: 15px; border: 1px dotted #000; padding: 10px;">
        				<table class="table table-hover">
        					<thead>
        						<tr>
        							<th align="center">Tgl</th>
        							<th align="center">No</th>
        							<th align="center">Nama Barang</th>
        							<th align="center">Qty</th>
        							<th align="center">Harga satuan</th>
        							<th align="center">Diskon</th>
        							<th align="center">Jumlah</th>
        						</tr>
        					</thead>
        					<tbody>
        						<tr>
        							<td>01</td>
        							<td>1</td>
        							<td>Paket 1</td>
        							<td>3</td>
        							<td>2000</td>
        							<td align="center">0%</td>
        							<td>25000</td>
        						</tr>
        						<tr>
        							<td>01</td>
        							<td>1</td>
        							<td>Paket 1</td>
        							<td>3</td>
        							<td>2000</td>
        							<td align="center">0%</td>
        							<td>25000</td>
        						</tr>
        						<tr>
        							<td colspan="5" align="right"><strong>Jumlah</strong></td>
        							<td>:</td>
        							<td>9500000</td>
        							
        						</tr>
        					</tbody>
        				</table>
        			</div>
        			<br>

        			<ul class="pagination">
        				<li><a href="#">&laquo;</a></li>
        				<li><a href="#">1</a></li>
        				<li><a href="#">2</a></li>
        				<li><a href="#">3</a></li>
        				<li><a href="#">4</a></li>
        				<li><a href="#">5</a></li>
        				<li><a href="#">&raquo;</a></li>
        			</ul>
        </div>
      </div>
    </div>
</div>
</body>
</html>
