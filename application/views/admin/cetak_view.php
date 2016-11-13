<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <!-- Latest compiled and minified CSS & JS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <script src="//code.jquery.com/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="container">
         <h2 align="center"><small>RIWAYAT BELANJA ANDA</small></h2>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="panel">
                  <div class="panel-heading">
                     <table border="0">
                        <thead>
                           <tr>
                              <th width="150">Kode Pelanggan</th>
                              <th width="30">:</th>
                              <th><?php echo $header_faktur['id_member']; ?></th>
                           </tr>
                           <tr>
                              <th width="150">Nama Pelanggan</th>
                              <th width="30">:</th>
                              <th><?php echo $header_faktur['nama_depan']; ?></th>
                           </tr>
                           <tr>
                              <th width="150">Alamat</th>
                              <th width="30">:</th>
                              <th><?php echo $header_faktur['alamat1']; ?></th>
                           </tr>
                           <tr>
                              <th width="150">No. Faktur</th>
                              <th width="30">:</th>
                              <th><?php echo $header_faktur['id_transaksi']; ?></th>
                           </tr>
                           <tr>
                              <th width="150">Tanggal</th>
                              <th width="30">:</th>
                              <th><?php echo date_format(date_create($header_faktur['tgl_transaksi']), date('d-m-Y')); ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="panel-body" style="border-top: 1px dotted #000; border-bottom: 1px dotted #000; padding: 5px;">
                     <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Qty</th>
                              <th>Harga Satuan</th>
                              <th>Diskon</th>
                              <th>Subtotal</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?
                        ?>
                           <?php $i= 1; ?>
                           <?php foreach($faktur as $item) { ?>
                           <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $item['nama_barang']; ?></td>
                              <td><?php echo $item['quantitas']; ?></td>
                              <td><?php echo "Rp. ". number_format($item['harga_jual'], 0, ".", "."); ?></td>
                              <td><?php echo $item['diskon']; ?></td>
                              <td><?php echo "Rp. ". number_format($item['subtotal'], 0, ".", ".") ?></td>
                           </tr>
                            <?php $i++; } ?>
                           <tr>
                              <th colspan="5">Jumlah</th>
                              <td><?php echo "Rp. ". number_format($total['total'], 0, ".", ".") ?></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>