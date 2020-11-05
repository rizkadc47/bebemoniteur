
<div class="content-wrapper">
        <section class="content-header">
            <h1><b>Data Pasien</b></h1>      
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">


                        <div class="box-header with-border">
                            
                             <div class="col-md-12 text-right">
                                        <?php echo anchor(site_url('mobil/create'), 'Cetak Bukti Pembayaran', 'class="btn btn-primary"'); ?>
 
                                </div> 
                        </div>
                        
                        <div class="box-body">

                            <table class="table">
                        	    <tr><td>Nama</td><td><?php echo 'Talita Syarifah'; ?></td></tr>
                        	    <tr><td>Tanggal Lahir</td><td><?php echo '12/11/1995'; ?></td></tr>
                        	    <tr><td>Nomor Telepon</td><td><?php echo '085755900182' ?></td></tr>
                        	    <tr><td>Email</td><td><?php echo 'talita@gmail.com'; ?></td></tr>
                        	    <!-- <tr><td>BUKTI PEMBAYARAN</td><td><img src="<?php echo base_url('upload/bukti_pembayaran/'.$BUKTI_PEMBAYARAN); ?>" width="200px"></td></tr> -->
                        	    <tr><td>Alamat</td><td><?php echo 'Dinoyo Sekolahan 2/1 Surabaya';?></td></tr>
                        	    <tr><td>Dokter</td><td><?php echo 'dr. Arina Salsabila. Sp.OG';?></td></tr>
                              <!--   <tr><td>DENDA</td><td>Rp. <?php echo number_format($STATUS_TRANSAKSI); ?></td></tr>
                                <tr><td>DANA KEMBALI</td><td>Rp. <?php echo number_format($DANA_KEMBALI); ?></td></tr> -->
                        	</table>
                            <br><br><br>
                            <table class='table table-bordered table-striped' id='mytable'>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Aktivitas</th>
                                        <th>Pembayaran (Rp)</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                    // $confirm="disabled";
                                    // if ($STATUS_PEMBAYARAN) {
                                    //     $confirm="";
                                    // }
                                    $start=0;
                                    foreach ($DETAIL_TRANSAKSI as $transaksi)
                                    {
                                ?>
                                        
                                    <tr>
                                        <td><?php echo ++$start ?></td>
                                        <td><?php echo $transaksi->TGL_SEWA ?></td>
                                        <td><?php echo 'Konsultasi'?></td>
                                        <td>Rp. <?php echo number_format($transaksi->HARGA_MOBIL) ?></td>
                                        <td><?php echo 'Tunai'?></td>
                                        <td><?php echo 'Belum Lunas'?></td>
                                        <td>
                                                <a href="<?php echo site_url('transaksi/confirm/'.$transaksi->KODE_TRANSAKSI) ?>">
                                                    <button class="btn btn-primary btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')" 
                                                    >Confirm</button></a>
                                                <a href="<?php echo site_url('transaksi/cancel/'.$transaksi->KODE_TRANSAKSI) ?>" ><button class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Hapus</button></a>                      
                                        </td>
                                    </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                                     
                          <!--   <tr><td></td><td><a href="<?php echo site_url('transaksi') ?>"><button class="btn btn-success btn-sm">Confirm All</button></a></td></tr>
                            <tr><td></td><td><a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a></td></tr> -->
 
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->



        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var t = $("#mytable").dataTable({
                    "scrollX": true
                });
            });
        </script>


