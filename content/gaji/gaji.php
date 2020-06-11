<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Pembayaran</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <a href="index.php?page=tambah-pembayaran" type="button" class="btn btn-success">Tambah Pembayaran</a>
            <hr>
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5px">No.</th>
                        <th>No. KTP</th>
                        <th>Nama Anggota</th>
                        <th>Pembayaran</th>
                        <th>Dibayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    $sql = "SELECT * FROM pembayaran a, anggota b where a.id_anggota = b.id_anggota";
                    $query = mysqli_query($db, $sql);
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['no_ktp'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['bulan_pembayaran'] ?></td>
                        <td><?php echo $data['bulan_dibayar'] ?></td>
                        <td>
                            <a href="index.php?page=tambah-gaji&id_pby=<?php echo $data['id_pembayaran'] ?>&id_agt=<?php echo $data['id_anggota'] ?>" type="button" class="btn btn-flat btn-primary">Tambah Gaji</a>
                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#DetailGaji<?php echo $data['id_pembayaran'] ?>">Detail</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->
<?php 
$sql11 = "SELECT * FROM pembayaran a, anggota b where a.id_anggota = b.id_anggota";
$query11 = mysqli_query($db, $sql11);

while($dt = mysqli_fetch_array($query11)) { 
?>
<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" id="DetailGaji<?php echo $dt['id_pembayaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Detail Gaji Anggota</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-vcenter table-striped">
                    <tr>
                        <td>
                            <table class="table table-hover table-vcenter table-striped" >
                            <thead>
                                <tr>
                                    <th>Periode</th>
                                    <th>Tanggal</th>
                                    <th>Hasil Kg</th>
                                    <th>Harga</th>
                                    <th style="text-align:right">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $tothasil  = 0;
                                    $totjumlah = 0;
                                    $id = $dt['id_anggota'];
                                    $sql2 = "SELECT * FROM gaji where id_anggota = $id";
                                    $query2 = mysqli_query($db, $sql2);
                                    while($data2 = mysqli_fetch_array($query2)){
                                    $tothasil += $data2['hasil'];
                                    $totjumlah += $data2['jumlah'];
                                ?>
                                <tr>
                                    <td><?php echo $data2['periode'] ?></td>
                                    <td><?php echo tgl_indo($data2['tgl_gaji']) ?></td>
                                    <td><?php echo $data2['hasil'] ?></td>
                                    <td><?php echo number_format($data2['harga'],0,",",".") ?></td>
                                    <td style="text-align:right"><?php echo number_format($data2['jumlah'],0,",",".") ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2">Jumlah</td>
                                    <td><?php echo $tothasil ?></td>
                                    <td></td>
                                    <td style="text-align:right"><?php echo number_format($totjumlah,0,",",".") ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="width:100%;padding:2px;">
                                <?php 
                                    $jlh_kwj = 0;
                                    $no=0;
                                    $id_pby = $dt['id_pembayaran'];
                                    $sql3 = "SELECT * FROM kewajiban_anggota where id_pembayaran = $id_pby";
                                    $query3 = mysqli_query($db, $sql3);
                                    echo '<b>A. Kewajiban di KUD</b>';
                                    while($data3 = mysqli_fetch_array($query3)){
                                    $no++;
                                    $jlh_kwj += $data3['jumlah'];
                                    if ($no == 10) {
                                        echo '<tr><td><br><b>B. Kewajiban Ketua Kelompok</b></td></tr>';
                                        $no=1;
                                    }
                                ?>
                                <tr>
                                    <td><?php echo $no.'. '.$data3['nama'] ?></td>
                                    <td style="text-align:right"><?php echo number_format($data3['jumlah'],0,",",".") ?></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <table style="width:100%;padding:2px;">
                            <tr>
                                <td>Jumlah; Rp</td>
                                <td style="text-align:right"><?php echo number_format($jlh_kwj,0,",",".") ?></td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <table style="width:100%;padding:2px;">
                            <tr>
                                <td><b>Hasil Bersih Diterima Petani; Rp</b></td>
                                <td style="text-align:right">
                                    <?php
                                        $grand_total = $totjumlah - $jlh_kwj;
                                        echo '<b>'.number_format($grand_total,0,",",".").'</b>';
                                    ?>
                                </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
                <a href="index.php?page=print-pembayaran&id=<?php echo $dt['id_pembayaran'] ?>" type="button" class="btn btn-warning">Print</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php } ?>
