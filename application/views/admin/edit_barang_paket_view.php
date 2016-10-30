  <!DOCTYPE html>
<html>
<head>
	<?php require_once(APPPATH .'views/include/include.php'); ?>
</head>
<body>
	<?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
	<div class="container-fluid">
      <div class="side-body">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <legend><h1><small><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Edit Barang Paket</small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
              <!-- content input barang paket -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <form action="<?php echo base_url('index.php/admin/barang_paket/submit_edit_barang_paket') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                     <div class="container-fluid">
                     	<input type="hidden" value="<?php echo $barang_paket['id_barang_paket']; ?>" name="id-barang-paket" />
                        <div class="form-group">
                          <div class="row">
                             <div class="col-md-10">
                                <label>Nama Paket</label>
                                <input type="text"  value="<?php echo $barang_paket['nama_paket']; ?>" name="nama-paket" class="form-control" id="" placeholder="Nama paket">
                             </div>
                          </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                            <div class="col-md-11">
                                <label >Keterangan</label>
                                <textarea id="keterangan" name="keterangan" class="form-control"><?php echo $barang_paket['keterangan']; ?>"</textarea>
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
                                <input type="file" name="foto-barang" placeholder="Foto Barang">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                            <div class="col-md-7">
                                <label>Harga Beli</label>
                                <input value="<?php echo $barang_paket['harga_beli']; ?>" type="text" name="harga-beli" class="form-control" id="" placeholder="Harga beli terhadap produsen">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-7">
                                <label>Harga Jual</label>
                                <input value="<?php echo $barang_paket['harga_jual']; ?>" type="text" name="harga-jual" class="form-control" id="" placeholder="Harga jual terhadap konsumen">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-5">
                                <label>Stok Barang</label>
                                <input value="<?php echo $barang_paket['stok']; ?>" type="number" name="stok-barang" class="form-control" placeholder="Jumlah stok tersedia">
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
        </div>
        
      </div>
   </div>
</body>
</html>