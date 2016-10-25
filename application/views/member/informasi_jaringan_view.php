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
        <legend><h1><small><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> Informasi Jaringan</small></h1></legend>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<div class="panel panel-info">
        		<div class="panel-heading">
        			<h3 class="panel-title">Informasi Jaringan</h3>
        		</div>
        		<div class="panel-body">
        			<div class="table-responsive">
        				<table class="table table-hover">
        					<thead>
        						<tr>
        							<th>Level</th>
        							<th>Jumlah Jaringan</th>
        							<th>Transaksi</th>
        						</tr>
        					</thead>
        					<tbody>
        						<tr>
        							<td>1</td>
        							<td>10</td>
        							<td>100</td>
        						</tr>
        						<tr>
        							<td>2</td>
        							<td>20</td>
        							<td>50</td>
        						</tr>
        					</tbody>
        				</table>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<div role="tabpanel">
        		<!-- Nav tabs -->
        		<ul class="nav nav-tabs" role="tablist">
        			<li role="presentation" class="active">
        				<a href="#level1" aria-controls="tab" role="tab" data-toggle="tab">Level 1</a>
        			</li>
        			<li role="presentation">
        				<a href="#level2" aria-controls="tab" role="tab" data-toggle="tab">Level 2</a>
        			</li>
        		</ul>
        	
        		<!-- Tab panes -->
        		<div class="tab-content">
        			<div role="tabpanel" class="tab-pane active" id="level1">
        				<div class="table-responsive">
        					<table class="table table-hover">
        						<thead>
        							<tr>
        								<th>No.</th>
        								<th>Kode Member</th>
        								<th>Nama Member</th>
        								<th>History Belanja</th>
        							</tr>
        						</thead>
        						<tbody>
        							<tr>
        								<td>1</td>
        								<td>01-123</td>
        								<td>Alif</td>
        								<td><a class="btn btn-block btn-sm btn-info" href="#" role="button">Check History</a></td>
        							</tr>
        						</tbody>
        					</table>
        				</div>
        			</div>
        			<div role="tabpanel" class="tab-pane" id="level2">
        				<div class="table-responsive">
        					<table class="table table-hover">
        						<thead>
        							<tr>
        								<th>No.</th>
        								<th>Kode Member</th>
        								<th>Nama Member</th>
        								<th>History Belanja</th>
        							</tr>
        						</thead>
        						<tbody>
        							<tr>
        								<td>1</td>
        								<td>01-123</td>
        								<td>Alif</td>
        								<td><a class="btn btn-block btn-sm btn-info" href="#" role="button">Check History</a></td>
        							</tr>
        							<tr>
        								<td>1</td>
        								<td>01-123</td>
        								<td>Agus</td>
        								<td><a class="btn btn-block btn-sm btn-info" href="#" role="button">Check History</a></td>
        							</tr>
        							<tr>
        								<td>1</td>
        								<td>01-123</td>
        								<td>Edo</td>
        								<td><a class="btn btn-block btn-sm btn-info" href="#" role="button">Check History</a></td>
        							</tr>
        							<tr>
        								<td>1</td>
        								<td>01-123</td>
        								<td>Wira</td>
        								<td><a class="btn btn-block btn-sm btn-info" href="#" role="button">Check History</a></td>
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