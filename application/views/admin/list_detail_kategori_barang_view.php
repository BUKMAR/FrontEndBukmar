<!DOCTYPE html>
<html>
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
          <legend><h1><small><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Daftar Sub Kategori <?php echo "\"". $kategori['nama_kategori'] ."\""; ?></small></h1></legend>
        </div>
        
        <div role="tabpanel">
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="manual">
              <!-- content input barang paket -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php 
                $url = 
                base_url() ."index.php/admin/detail_kategori/input_detail_kategori_barang?id_kategori=". $id_kategori;
                ?>
              	<a class="btn btn-primary" href="<?php echo $url; ?>">
                <span class="glyphicon glyphicon-plus"></span> Tambah Detail Kategori</a>
              	<br/><br/>
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
                        <th>Nama Detail Kategori</th>
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
                  "url": "<?php echo base_url() 
                  .'index.php/admin/detail_kategori/ajax_list_detail_kategori_barang?id_kategori='.  $id_kategori?>",
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
                $('.ktg-detail-delete').on('click',function(){
                  var idDetailKategoriBarang = $(this).attr("data-id-detail-kategori");

                  swal({
                      title: "Apakah anda yakin?",
                      text: "Anda akan menghapus "+ $(this).attr("data-nama-detail-kategori"),
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
                          url: "<?php echo base_url('index.php/admin/detail_kategori/ajax_delete_detail_kategori'); ?>",
                          type: "POST",
                          dataType:'json',
                          data: {id: idDetailKategoriBarang},
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
</html>  