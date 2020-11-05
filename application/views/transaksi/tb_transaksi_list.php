<div class="content-wrapper">
    <section class="content-header">
        <h1><b>Daftar Pasien</b></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pesanan Mobil</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div style="margin-top: 4px"  id="message">
                                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                </div>
                            </div>   
                                         
                        </div>
                        <br><br>
                        <table class='table table-bordered table-striped' id='mytable'>
                        <thead>
                            <tr>
                                <th>No</th>
                        		<th>Tanggal Kunjungan</th>
                        		<th>Nama Pasien</th>
                        		<th> </th>
                            </tr>
                        </thead>
                        <tbody><?php
                            $start=0;
                            foreach ($transaksi_data as $transaksi)
                            { ?>
                                <tr>
                            		<td width="100px"><?php echo ++$start ?></td>
                                    <td width="150px"><?php echo $transaksi->TGL_PEMBAYARAN ?></td>
                            		<td width="150px"><?php echo $transaksi->STATUS_PEMBAYARAN 
                                    ?></td>
                            		<td style="text-align:center" width="300px">
                            			<?php 
                            			echo anchor(site_url('transaksi/detail_pesanan/'.$transaksi->KODE_TRANSAKSI),'Lihat Selengkapnya'); 
                            			// echo ' | '; 
                            			// echo anchor(site_url('transaksi/update/'.$transaksi->KODE_TRANSAKSI),'Confirm'); 
                            			// echo ' | '; 
                            			// echo anchor(site_url('transaksi/delete/'.$transaksi->KODE_TRANSAKSI),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                            			?>
                            		</td>
                            	</tr>
                            <?php } ?>
                        </tbody>
                        </table>
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


