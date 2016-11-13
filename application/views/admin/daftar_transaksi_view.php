 <!DOCTYPE html>
<html>
	<head>
		<title>BUKMAR</title>
		    <?php require_once(APPPATH .'views/include/include.php'); ?>
		    <link rel="stylesheet" href="<?php echo base_url("assets/sweetalert/sweetalert.css"); ?>">
		    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
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
					<legend><h1><small><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Transaksi</small></h1></legend>
					 <br/>
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
                                       <th>ID Transaksi</th>
                                       <th>Nama Member</th>
                                       <th>Tanggal</th>
                                       <th>Status</th>
                                       <th>Waktu Pengiriman</th>
                                       <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                        </div>
                        <?php 
                          for($i = 0; $i < count($transaksi); $i++) {
                            $item = $transaksi[$i];

                            $id = 'id-'. $i;
                            ?>

                            <div class='modal fade' id='<?php echo $id; ?>' role='dialog'>
                               <div class='modal-dialog'>
                                  <div class='modal-content'>
                                     <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h5 class='modal-title'>Status Pengiriman Transaksi "<?php echo $item['id_transaksi'];  ?>"</h5>
                                     </div>
                                    <form action="<?php echo base_url('index.php/admin/transaksi/submit_edit_transaksi'); ?>" method='POST' class='form-horizontal' role='form' enctype='multipart/form-data' 
                                        style='padding: 35px; border: 1px solid #dedede; margin: 15px;'>
                                     <div class='modal-body'>
                                                <input type='hidden' name='id-transaksi' value="<?php echo $item['id_transaksi']; ?>"/>
                                                  <div class='container-fluid'>
                                                    <div class='form-group'>
                                                      <div class='row'>
                                                        <div class='col-md-10'>
                                                          <label>Ubah Status Pengiriman</label>
                                                          <select name='status-pengiriman' class='form-control'>
                                                          	<option value='Proses' 
                                                          	<?php  
                                                          	echo $item['status_pengiriman'] == 'Proses' ? 'selected' : ''; 
                                                          	?> >Proses</option>
                                                          	<option value='Gagal' 
                                                          	<?php  
                                                          	echo $item['status_pengiriman'] == 'Gagal' ? 'selected' : ''; 
                                                          	?> >Gagal</option>
                                                          	<option value='Terkirim' 
                                                          	<?php  
                                                          	echo $item['status_pengiriman'] == 'Terkirim' ? 'selected' : ''; 
                                                          	?> >Terkirim</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                     </div>
                                     <div class='modal-footer'>
                                        <button type='submit' class='btn btn-primary'>Perbaharui</button>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
                                     </div>
                                     </form>
                                  </div>
                               </div>
                            </div>
                        <?php
                          }
                        ?>
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
		                  "url": "<?php echo site_url('admin/transaksi/ajax_list_transaksi')?>",
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
		                $('.transaksi-delete').on('click',function(){
		                  var idBarang = $(this).attr("data-transaksi-id");

		                  swal({
		                      title: "Apakah anda yakin?",
		                      text: "Anda akan menghapus transaksi dari \""+ $(this).attr("data-transaksi-nama") +"\"",
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
		                          url: "<?php echo site_url('admin/transaksi/ajax_delete_transaksi')?>",
		                          type: "POST",
		                          dataType:'json',
		                          data: {id: idBarang},
		                          success: function() {              
		                            swal("Dihapus!", "Barang berhasil dihapus", "success");
		                            location.reload();
		                          }
		                        });
		                      } else {
		                        swal("Batal", "Anda batal menghapus transaksi", "error");
		                      }
		                  });
		                });
		              }
		        }); 
		    });
		  </script>
	</body>
</html>