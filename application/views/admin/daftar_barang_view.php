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
					<legend><h1><small><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Barang</small></h1></legend>
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
                                       <th>Harga Jual</th>
                                       <th>Harga Beli</th>
                                       <th>Foto</th>
                                       <th>Aksi</th>
                                    </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                    </div>
                        <?php 
                          for($i = 0; $i < count($barang); $i++) {
                            $item = $barang[$i];

                            $id = 'id-'. $i;
                            ?>

                            <div class='modal fade' id='<?php echo $id; ?>' role='dialog'>
                               <div class='modal-dialog'>
                                  <div class='modal-content'>
                                     <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h5 class='modal-title'>Detail Barang "<?php echo $item['nama_barang'];  ?>"</h5>
                                     </div>
                                     <br/>
                                     <div class='modal-body'>      
                                        <div class='container-fluid'>
                                        	<div class='form-group'>
                                                <div class='row'>
                                                    <div class='col-md-12 col-xs-12'>
                                                    	<table class="table table-hover">
                                                    		<tr>
                                                    			<td>ID Barang</td><td>:&nbsp;<?php echo $item['id_barang']; ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Nama Barang</td><td>:&nbsp;<?php echo $item['nama_barang']; ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Tanggal Upload</td><td>:&nbsp;<?php echo date_format(date_create($item['tgl_upload']), date('d-m-Y')); ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Harga Beli</td><td>:&nbsp;<?php echo "Rp. ". number_format($item['harga_beli'], 0, ".", "."); ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Harga Jual</td><td>:&nbsp;<?php echo "Rp. ". number_format($item['harga_jual'], 0, ".", "."); ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Harga Tawar</td><td>:&nbsp;<?php echo "Rp. ". number_format($item['harga_tawar'], 0, ".", "."); ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Keterangan</td><td>:<?php echo $item['keterangan']; ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Tanggal Kadaluarsa</td><td>:<?php echo date_format(date_create($item['tgl_kadaluarsa']), date('d-m-Y')); ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Berat</td><td>:&nbsp;<?php echo $item['berat']; ?> Kg</td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Jenis Barang</td><td>:&nbsp;<?php echo $item['jenis_barang']; ?></td>
                                                    		</tr>
                                                    		<tr>
                                                    			<td>Kategori Usia</td><td>:&nbsp;<?php echo $item['kategori_usia']; ?></td>
                                                    		</tr>
                                                    	</table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class='modal-footer'>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
                                     </div>
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
		                  "url": "<?php echo site_url('admin/barang/ajax_list_barang')?>",
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
		                      text: "Anda akan menghapus \""+ $(this).attr("data-brg-nama") +"\"",
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
		                          url: "<?php echo site_url('admin/barang/ajax_delete_barang')?>",
		                          type: "POST",
		                          dataType:'json',
		                          data: {id: idBarang},
		                          success: function() {              
		                            swal("Dihapus!", "Barang berhasil dihapus", "success");
		                            location.reload();
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