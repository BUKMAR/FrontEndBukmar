<!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
      <div class="side-body">
      	<h1>Input Barang Paket</h1>
      	<!-- content input barang paket -->
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="submit_tambah_barang_paket" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
               <div class="container-fluid">
                  <div class="form-group">
	                  <div class="row">
	                     <div class="col-md-10">
	                        <label>Nama Paket</label>
	                        <input type="text" name="nama-paket" class="form-control" id="" placeholder="Nama paket" required>
	                     </div>
	                  </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                     	<div class="col-md-11">
	                        <label >Keterangan</label>
	                        <textarea id="keterangan" name="keterangan" class="form-control" required></textarea>
	                           <script>
	                              CKEDITOR.replace( 'keterangan' );
	                           </script>
                        </div>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                      	<div class="col-md-4">
                        	<label>Foto Barang</label>
                        	<input type="file" name="foto-barang" placeholder="Foto Barang" required>
                      	</div>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                     	<div class="col-md-7">
	                        <label>Harga Beli</label>
	                        <input type="text" name="harga-beli" class="form-control" id="" placeholder="Harga beli terhadap produsen" required>
                      	</div>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                      	<div class="col-md-7">
	                        <label>Harga Jual</label>
	                        <input type="text" name="harga-jual" class="form-control" id="" placeholder="Harga jual terhadap konsumen" required>
                      	</div>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                      	<div class="col-md-5">
	                        <label>Stok Barang</label>
	                        <input type="number" name="stok-barang" class="form-control" placeholder="Jumlah stok tersedia" required>
                       	</div>
                     </div>
                  </div>

                  <div class="form-group">
                    	<button type="submit" class="btn btn-md btn-primary">Submit</button>
                    	<button type="reset" class="btn btn-md btn-danger">Reset</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>