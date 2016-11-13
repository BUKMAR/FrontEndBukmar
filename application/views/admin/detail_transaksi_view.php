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
					<legend><h1><small><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Detail Transaksi <?php echo "\"$id_transaksi\""; ?></small></h1></legend>
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
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Jual</th>
                                    <th>Kuantitas</th> 
                                    <th>Subtotal</th>                                  
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                     </div>
				</div>
				<div class="col-xs-12" style="padding-left: 35px; padding-top: 20px;">
                	<h3 id="total" style="display: none;">Total Belanja: <?php if(isset($total)) { echo "Rp. ". number_format($total, 0, ".", "."); }?></h3>   
                	<form action="<?php echo base_url('index.php/admin/detail_transaksi/cetak'); ?>" method="POST" style="margin-top: 35px; display: none;" id="form-print">
                		<input type="hidden" id="id-transaksi-cetak" name="id-transaksi" value="<?php echo $id_transaksi; ?>">
                		<button type="submit" class="btn btn-info"> <span class="glyphicon glyphicon-print"></span> Print</button>
                	</form>  	
                </div>
			</div>
			<input type="hidden" id="id-transaksi" value="<?php echo $id_transaksi; ?>">
		</div>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
		  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
		  <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
		  <script type="text/javascript">
		    $(function() {
		    	var idTransaksi = $("#id-transaksi").val();

		        var table = $('#table').DataTable({ 
		              "processing": true, //Feature control the processing indicator.
		              "serverSide": true, //Feature control DataTables' server-side processing mode.
		              "order": [], //Initial no order.
		              // Load data for the table's content from an Ajax source
		              "ajax": {
		                  "url": "<?php echo site_url('admin/detail_transaksi/ajax_list_detail_transaksi')?>",
		                  "type": "POST",
		                  data: {id: idTransaksi}
		              },
		              //Set column definition initialisation properties.
		              "columnDefs": [
		              { 
		                  "targets": [0], //first column / numbering column
		                  "orderable": false, //set not orderable
		              },
		              ],
		              "fnInitComplete": function(oSettings, json) {        
		                $("#total").css({
		                  	"display":"inline"
		                });
		                
		                $("#form-print").css({
		                  	"display":"block"
		                });

		                $("#id-transaksi-cetak").val($("#id-transaksi").val());
		                
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