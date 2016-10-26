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
          <legend><h1><small><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Tambah Barang Paket</small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#manual" aria-controls="home" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Masukan Barang Manual</a>
            </li>
            <li role="presentation">
              <a href="#import" aria-controls="tab" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-import" aria-hidden="true"></span> Masukan Barang File Excel</a>
            </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
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
            <div role="tabpanel" class="tab-pane" id="import">
              <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                  <form action="" method="POST" role="form" enctype="multipart/form-data">
              
                    <div class="form-group">
                      <label>Import file extensi .excel</label>
                      <input type="file" class="form-control" id="" required="required">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Upload file</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
   </div>
</body>
</html>