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
          <legend><h1><small><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Stok Barang Satuan</small></h1></legend>
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
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Upload</th>
                        <th>Foto</th>
                        <th>Stok</th>
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
                        <?php 
                          for($i = 0; $i < $jumlah_total_barang; $i++) {
                            $item = $barang_satuan[$i];

                            $id = 'id-'. $i;
                            $url = base_url('index.php/admin/stok_barang_satuan/submit_edit_barang_satuan');

                            echo "<div class='modal fade' id='$id' role='dialog'>
                               <div class='modal-dialog'>
                                  <div class='modal-content'>
                                     <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title'>Edit Barang \"". $item['nama_barang'] ."\"</h4>
                                     </div>
                                    <form action='$url' method='POST' class='form-horizontal' role='form' enctype='multipart/form-data' 
                                        style='padding: 35px; border: 1px solid #dedede; margin: 15px;'>
                                     <div class='modal-body'>
                                                <input type='hidden' name='id-barang' value='". $item['id_barang_satuan'] ."'/>
                                                  <div class='container-fluid'>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-10'>
                                                          <label>Nama Barang</label>
                                                          <input type='text' name='nama-barang' value='". $item['nama_barang'] ."' class='form-control' placeholder='Nama paket' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-5'>
                                                          <label>Stok Barang</label>
                                                          <input type='number' name='stok'  value='".  $item['stok'] ."'  class='form-control' placeholder='Jumlah stok tersedia' required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                     </div>
                                     <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary'>Save changes</button>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                     </form>
                                  </div>
                               </div>
                            </div>";
                          }
                        ?>
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
                  "url": "<?php echo base_url() .'index.php/admin/stok_barang_satuan/ajax_list_stok_barang_satuan'; ?>",
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
                $('.brg-delete').on('click',function(){
                  var idBarang = $(this).attr("data-brg-id");

                  swal({
                      title: "Apakah anda yakin?",
                      text: "Anda akan menghapus "+ $(this).attr("data-brg-nama"),
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
                          url: "<?php echo base_url('index.php/admin/stok_barang_satuan/ajax_delete_barang_satuan'); ?>",
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