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
          <legend><h1><small><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Tambah Sub Kategori <?php echo "\"". $kategori['nama_kategori'] ."\""; ?></small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
              <!-- content input barang paket -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <form action="<?php echo base_url('index.php/admin/detail_kategori/submit_tambah_detail_kategori_barang') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                     <div class="container-fluid">
                     	<div class="form-group">
                          <div class="row">
                             <div class="col-md-10">
                                <label>Nama Kategori</label>
                                <input type="text" disabled value="<?php echo $kategori['nama_kategori']; ?>" class="form-control" placeholder="Nama kategori">
                             </div>
                          </div>
                        </div>
                        <input type="hidden" name="id-kategori" value="<?php echo $kategori['id_kategori']; ?>" class="form-control" />
                        <div class="form-group">
                          <div class="row">
                             <div class="col-md-10">
                                <label>Nama Sub Kategori</label>
                                <input type="text" name="nama-detail-kategori" class="form-control" placeholder="Nama sub kategori">
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