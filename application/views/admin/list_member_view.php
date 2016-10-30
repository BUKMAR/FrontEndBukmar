<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
      <div class="side-body">
      	<h1>List Member View</h1>
      	<div class="table-responsive">
      		<table class="table table-hover">
      			<thead>
      				<tr>
      					<th>ID Register</th>
      					<th>Nama Lengkap</th>
      					<th>Alamat Lengkap</th>
      					<th>Nomor Handphone</th>
      					<th>Jumlah Anggota</th>
      					<th>Pekerjaan</th>
      					<th>Email</th>
      					<th>Jenis Kelamin</th>
      					<th>Aksi</th>
      				</tr>
      			</thead>
      			<tbody>
      				<?php for ($i = 0; $i < $jumlah_data; $i++):
      					$item = $data_register[$i];
      				 ?>
      					
	      				<tr>
	      					<td><?php echo $item['idregister_member']; ?></td>
	      					<td><?php echo $item['nama_lengkap']; ?></td>
	      					<td><?php echo $item['alamat_member'];  ?></td>
	      					<td><?php echo $item['nomor_handphone']; ?></td>
	      					<td><?php echo $item['jumlah_anggota']; ?></td>
	      					<td><?php echo $item['pekerjaan']; ?></td>
	      					<td><?php echo $item['alamat_email']; ?></td>
	      					<td><?php echo $item['jenis_kelamin']; ?></td>
	      					<td>
	      						
	      					</td>
	      				</tr>
	      				<?php endfor ?>
      				
      			</tbody>
      		</table>
      	</div>
      </div>
     </div>
</body>
</html>