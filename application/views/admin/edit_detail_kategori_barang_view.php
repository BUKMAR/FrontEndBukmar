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
          <legend><h1><small><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Edit Sub Kategori
          "<?php echo $detail_kategori['nama_detail_kategori']; ?>"</small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
              <!-- content input barang paket -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <form action="<?php echo base_url('index.php/admin/kategori_barang/submit_edit_kategori_barang') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                     <div class="container-fluid">
                        <div class="form-group">
                          <div class="row">
                             <div class="col-md-10">
                                <label>Kategori Barang</label>
                                <input type="text" disabled value="<?php echo $detail_kategori['nama_kategori']; ?>" name="nama-kategori" class="form-control" placeholder="Nama kategori"/>
                                <input type="hidden" name="id-kategori" value="<?php echo $detail_kategori['id_kategori']; ?>">
                             </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                             <div class="col-md-10">
                                <label>Sub Kategori Barang</label>
                                <input type="text" value="<?php echo $detail_kategori['nama_detail_kategori']; ?>" name="nama-kategori" class="form-control" placeholder="Nama kategori"/>
                                <input type="hidden" name="id-kategori" value="<?php echo $detail_kategori['id_kategori']; ?>">
                             </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Edit</button>
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