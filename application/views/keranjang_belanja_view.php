<!DOCTYPE html>
<html>
	<head>
		<?php require_once(APPPATH .'views/include/include.php'); ?>
		<link rel="stylesheet" href="<?php echo base_url("assets/sweetalert/sweetalert.css"); ?>">
    	<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="#" style="margin-top: -10px; margin-left: -10px;"><img src="<?php echo base_url("assets/images/MAR.png"); ?>" class="img-responsive" alt="Logo" style="width: 150px; height: 40px;"></a>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row" style="margin-top: 60px;">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<label for="troli" style="margin: 15px; font-size: 18px;">Daftar Troli Belanja</label>
					<div class="panel panel-info">
						<?php if(isset($barang)) { ?>
							<input type="hidden" id="jumlah_item" value="<?php echo count($barang); ?>">
						<?php } ?>
						<?php if(isset($barang)) { ?>
							<?php $idx = 0; foreach($barang as $item) { ?>
								<?php 
									$qty_id = "qty-". $idx; 
									$stok_id = "stok-". $idx; 
									$nama_barang_id = "nama-barang-". $idx; 
									$id_barang_id = "id-barang-". $idx; 
								?>
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
											<img src="
												<?php 
													if(!empty($item['foto_barang'])) {
														echo base_url($item['foto_barang']);
													} else {
														echo "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTgwM2ZmODUzYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ODAzZmY4NTNiIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjY5NTMxMjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=";
													}
												?>" class="img-responsive img-fluid" style="width: 100%; height: 500;" alt="Image">
										</div>
										<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
											<p style="margin-top: -25px;"><h3><small><?php echo $item["nama_barang"] ?></small></h3></p>
											<p style="margin-top: -15px;"><h4><small><h3 style="color: #000;">
												<?php echo "Rp. ". number_format($item['harga_jual'], 0, ".", "."); ?>
											</h3>
											<?php if(!empty($item["diskon"])) { ?> 
											<p style="margin-top: -10px;"><span>Sebelum <del style="font-weight: bold; color: red;">Rp. 489.000</del> &nbsp; Diskon <span style="font-weight: bold; color: red;">74%</span></span></small></p></h4>
											</p>
											<?php } else { ?>
											<p style="margin-top: -10px; display: none;"><span>Sebelum <del style="font-weight: bold; color: red;">Rp. 489.000</del> &nbsp; Diskon <span style="font-weight: bold; color: red;">74%</span></span></small></p></h4>
											</p>
											<?php } ?>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
												    <div class="input-group">
												        <span class="input-group-btn">
												         <button id="<?php echo "btn-min-". $idx; ?>" class="btn btn-default" type="button">-</button>
												        </span>
												        <input type="text" name="kuantitas" 
												        id="<?php echo $qty_id; ?>" 
												        class="form-control" style="text-align: center;" 
												        value="<?php echo $item["qty"]; ?>">
												        <span class="input-group-btn">
												         <button id="<?php echo "btn-plus-". $idx; ?>" class="btn btn-default" type="button">+</button>
												        </span>
												    </div><!— /input-group —>
												</div>
											</div>
											<input type="hidden" id="<?php echo $stok_id; ?>" value="<?php echo $item["stok"]; ?>" />
											<input type="hidden" id="<?php echo $nama_barang_id; ?>" value="<?php echo $item["nama_barang"]; ?>" />
											<input type="hidden" id="<?php echo $id_barang_id; ?>" value="<?php echo $item["id_barang_satuan"]; ?>" />
											<!--
											<p style="text-decoration: none; margin-top: 5px;"><a href=""> <span class="glyphicon glyphicon-heart-empty"></span> Tambahkan ke wishlist </a></p>
											-->
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-1">
											<button id="<?php echo 'btn-delete-'. $idx; ?>" class="btn btn-block btn-danger" role="button" style="margin-top: 10px;">&times;</button>
										</div>

									</div>
								</div>
							<?php $idx++; } ?>
						<?php } else { ?>
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-12" style="text-align: center; padding-top: 150px; padding-bottom: 150px;">
												<h3 style="opacity: 0.5">Keranjang Belanja Anda Kosong</h3>
											</div>
										</div>
									</div>
						<?php } ?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<label for="troli" style="margin: 15px; font-size: 18px;">Detail Order</label>
					<div class="panel panel-info">
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>Subtotal</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p><?php echo isset($total) ? "Rp. ". number_format($total, 0, ".", ".") : 0; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>Ongkos Kirim</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>Rp. 0,-</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>PPN</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>Rp. 0,-</p>
								</div>
							</div>
							<div><hr style="width: 100%; float: left;"></div>
							<br>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p>Total yang harus dibayar</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<p><?php echo isset($total) ? "Rp. ". number_format($total, 0, ".", ".") : 0; ?></p>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<a href="<?php echo base_url('index.php/home/checkout'); ?>" class="btn btn-block btn-warning">LANJUTKAN KE PEMBAYARAN</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript">
      $(document).ready(function() {
      	for(var i = 0; i < parseInt($("#jumlah_item").val()); i++) {
	        $("#btn-min-"+ i).click(function(event) {
	        	var parentId = event.target.id;
	        	var arr = parentId.split("-");
	        	var parentIdx = arr[arr.length - 1];

	        	var qty = parseInt($("#qty-"+ parentIdx).val()) - 1;

	         	if(qty > 0) {
	         		$("#qty-"+ parentIdx).val(qty);
				
					var idBarang = $("#id-barang-"+ parentIdx).val();
				
	         		$.ajax({
                    	url: "<?php echo base_url('index.php/keranjang_belanja/ajax_tambah_kuantitas_barang'); ?>",
                        type: "POST",
	                    dataType:'json',
	                    data: {
	                    	id: idBarang,
	                    	kuantitas: qty 
	                    },
	                   	success: function() {              
	                        location.reload();
	                    }
                    });
	         	}
	        });

	        $("#btn-plus-"+ i).click(function(event) {
	        	var parentId = event.target.id;

	        	var arr = parentId.split("-");
	        	var parentIdx = arr[arr.length - 1];
	        	var qty = parseInt($("#qty-"+ parentIdx).val()) + 1;

	         	if(qty <= $("#stok-"+ parentIdx).val()) {
	         		$("#qty-"+ parentIdx).val(qty);
					
					var idBarang = $("#id-barang-"+ parentIdx).val();
				
	         		$.ajax({
                    	url: "<?php echo base_url('index.php/keranjang_belanja/ajax_tambah_kuantitas_barang'); ?>",
                        type: "POST",
	                    dataType:'json',
	                    data: {
	                    	id: idBarang,
	                    	kuantitas: qty 
	                    },
	                   	success: function() {              
	                        location.reload();
	                    }
                    });
	         	}
         	});

         	$("#btn-delete-"+ i).click(function(event) {
         		var parentId = event.target.id;

	        	var arr = parentId.split("-");
	        	var parentIdx = arr[arr.length - 1];

         		swal({
				  title: "Apakah anda yakin?",
				  text: 
				  "Anda akan menghapus \""+ $("#nama-barang-"+ parentIdx).val() +"\" dari keranjang belanja anda",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Ya, hapus!",
				  cancelButtonText: "Batalkan",
				  closeOnConfirm: false,
				  closeOnCancel: false
				},
				function(isConfirm){
					var idBarang = $("#id-barang-"+ parentIdx).val(); 
					
					if (isConfirm) {
                    	$.ajax({
                    		url: "<?php echo base_url('index.php/keranjang_belanja/ajax_delete_barang_from_chart'); ?>",
                        	type: "POST",
	                        dataType:'json',
	                       	data: {id: idBarang},
	                        success: function() {              
	                        	swal("Dihapus!", "Barang berhasil dihapus dari keranjang belanja anda", "success");

	                        	location.reload();
	                        }
                    	});
			     	} else {
						swal("Dibatalkan", "Barang anda masih berada didalam keranjang belanja", "error");
				  	}
				});
         	})
      	}
      });
    </script>
		<!-- footer -->
		<?php require_once(APPPATH .'views/templates/footer.php'); ?>
	</body>
</html>