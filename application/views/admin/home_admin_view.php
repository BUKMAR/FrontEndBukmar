<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<style type="text/css" media="screen">
	.huge {
		font-size: 40px;
	}
</style>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
      <div class="side-body">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <legend><h1><small><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Dashboard</small></h1></legend>
        </div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<!-- <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10"> -->
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
											</div>
											<div class="col-xs-9 text-right">
												<div class="huge">540</div>
												<div>Total Penjualan Barang</div>
											</div>
										</div>
									</div>
								</div>
							<!-- </div> -->
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<!-- <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10"> -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-user" aria-hidden="true"></span>
											</div>
											<div class="col-xs-9 text-right">
												<div class="huge">540</div>
												<div>Total Jumlah Member</div>
											</div>
										</div>
									</div>
								</div>
							<!-- </div> -->
						</div>
					</div>

        	
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<div role="tabpanel">
          	<!-- Nav tabs -->
          	<ul class="nav nav-tabs" role="tablist">
          		<li role="presentation" class="active">
          			<a href="#barang_paket" aria-controls="barang_paket" role="tab" data-toggle="tab">Penjualan Paket</a>
          		</li>
          		<li role="presentation">
          			<a href="#jumlah_barang_satuan" aria-controls="tab" role="tab" data-toggle="tab">Penjualan Satuan</a>
          		</li>
          		<li role="presentation">
          			<a href="#data_penjualan" aria-controls="tab" role="tab" data-toggle="tab">Penjualan Keseluruhan</a>
          		</li>
          	</ul>
        	</div>

        <!-- Tab panes -->
          <div class="tab-content">
          		<div role="tabpanel" class="tab-pane active" id="barang_paket">
								<div class="row" style="margin-left: -15px;">
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-success">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-gift" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Jumlah Barang Paket</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-warning">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Stok Barang Paket</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-danger">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Total Transaksi</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>

	          		</div>
          		</div>

          		<div role="tabpanel" class="tab-pane" id="jumlah_barang_satuan">
          			<div class="row" style="margin-left: -15px;">
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-success">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-gift" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Jumlah Barang Satuan</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-warning">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Stok Barang Satuan</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-danger">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Total Transaksi</div>
					       				  </div>
					              </div>
					            </div>
					            <a href="#">
					              <div class="panel-footer">
					                <span class="pull-left">View Details</span>
					                  <span class="pull-right"><span style="font-size: 15px;" class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></span>
					                  <div class="clearfix"></div>
					              </div>
					            </a>
		          			</div>
	          			</div>
	          		</div>
          		</div>

          		<div role="tabpanel" class="tab-pane" id="data_penjualan">
          			<div class="row" style="margin-left: -15px;">
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-success">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-signal" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Jumlah Penjualan</div>
					       				  </div>
					              </div>
					            </div>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-warning">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-signal" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Penjualan bulan lalu</div>
					       				  </div>
					              </div>
					            </div>
		          			</div>
	          			</div>

	          			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="panel panel-danger">
					            <div class="panel-heading">
					              <div class="row">
					                <div class="col-xs-3">
					                  <span style="font-size: 65px; margin-top: 10px;" class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
					                </div>
					              	<div class="col-xs-9 text-right">
					            			<div class="huge">540</div>
					          				<div>Penjualan hari ini</div>
					       				  </div>
					              </div>
					            </div>
		          			</div>
	          			</div>
	          		</div>
          		</div>
          </div>
        </div>
				
				<!-- bagan chart line -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<div class="panel panel-default">
        		<div class="panel-body">
        			<canvas id="myChart" width="900" height="300"></canvas>
        		</div>
        	</div>
        </div>
      </div>
     </div>
</body>
<script>
var ctx = document.getElementById("myChart");
var ctx = document.getElementById("myChart").getContext("2d");
var ctx = $("#myChart");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    	responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        options: {
        	title: {
        		display: true,
        		text: 'Costume Chart Title'
        	}
        }
    }
});
</script>
</html>