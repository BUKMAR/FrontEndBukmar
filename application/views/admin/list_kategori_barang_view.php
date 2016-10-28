<!DOCTYPE html>
<html>
<<<<<<< HEAD
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
					<legend><h1><small><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> List Kategori Barang</small></h1></legend>
				</div>
			</div>
		</div>
	</body>
=======
  <head>
    <?php require_once(APPPATH .'views/include/include.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/sweetalert/sweetalert.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
  </head>
  <body>
    <?php require_once(APPPATH .'views/admin/template/menu_nav.php'); ?>
    <div class="container-fluid">
      <div class="side-body">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <legend><h1><small><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Daftar Kategori Barang</small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
              <!-- content input barang paket -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive" style="border: 1px solid #dedede; padding: 35px; border-top-right-radius: 7px;
                  border-top-left-radius: 7px;
                  border-bottom-right-radius: 7px;
                  border-bottom-left-radius: 7px;">
                  <table id="table" class="table table-hover display"
                    width="100%"
                    cellpadding="1"
                    cellspacing="0" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
  <script type="text/javascript">
    $(function() {
        var table = $('#table').DataTable({ 
              "processing": true, //Feature control the processing indicator.
              "serverSide": true, //Feature control DataTables' server-side processing mode.
              "order": [], //Initial no order.
              // Load data for the table's content from an Ajax source
              "ajax": {
                  "url": "<?php echo site_url('admin/kategori_barang/ajax_list_kategori_barang')?>",
                  "type": "POST"
              },
              //Set column definition initialisation properties.
              "columnDefs": [
              { 
                  "targets": [0], //first column / numbering column
                  "orderable": false, //set not orderable
              },
              ],
              "fnInitComplete": function(oSettings, json) {        
                $('.ktg-delete').on('click',function(){
                  var idBarang = $(this).attr("data-id-kategori");

                  swal({
                      title: "Apakah anda yakin?",
                      text: "Anda akan menghapus "+ $(this).attr("data-nama-kategori"),
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#DD6B55",
                      confirmButtonText: "Ya, hapus barang",
                      cancelButtonText: "Batalkan!",
                      closeOnConfirm: false,
                      closeOnCancel: false 
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        $.ajax({
                          url: "<?php echo site_url('admin/kategori_barang/ajax_delete_kategori')?>",
                          type: "POST",
                          dataType:'json',
                          data: {id: idBarang},
                          success: function() {              
                            swal("Dihapus!", "Barang berhasil dihapus", "success");
                            table.ajax.reload();
                          }
                        });
                      } else {
                        swal("Batal", "Anda batal menghapus barang", "error");
                      }
                  });
                });
              }
        }); 
    });
  </script>
  </body>
>>>>>>> eb6141ce77c21df456ff25001e44f93f25178829
</html>