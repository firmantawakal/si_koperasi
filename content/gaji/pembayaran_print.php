<style>
.table-print{
    font-size: 13px;
}

.table-print thead > tr > th {
    font-size: 13px; !important 
}
</style>

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
        <div class="card-box">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    $id2 = $_GET['id'];
                    $sql11 = "SELECT * FROM pembayaran a, anggota b where a.id_anggota = b.id_anggota and a.id_pembayaran = $id2";
                    $query11 = mysqli_query($db, $sql11);

                    while($dt = mysqli_fetch_array($query11)) { 
                    ?>
                        <table class="table table-print">
                        <tr>
                            <td style="text-align:center">
                                <h3><b>KOPERASI UNIT DESA</b></h3>
                                <h4>(MUMAN)</h4>
                                <b>Badan Hukum Nomor :  63/BH/IV.7/2008/30 Juni 2008<br>
                                NPWP : 02.863.224.8.221.000</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table style="width:100%">
                                <tr>
                                    <td>Pembayaran Hasil TBS <?php echo tgl_indo_bln($dt['bulan_pembayaran']); ?></td>
                                    <td>Nama Kelompok Tani ; <?php echo $dt['klpk_tani']; ?></td>
                                </tr>
                                <tr>
                                    <td>Dibayar Bulan <?php echo tgl_indo_bln($dt['bulan_dibayar']); ?></td>
                                    <td>Atas Nama <b><?php echo $dt['nama']; ?></b></td>
                                </tr>
                                </table>
                                
                            </td>
                        </tr>
                            <tr>
                                <td>
                                    <table class="table table-print">
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
                                            <td colspan="2" style="text-align:right">JUMLAH</td>
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
                    <br>
                    <table style="width:100%;text-align:center">
                        <tr>
                            <td>Ketua Kelompok </td>
                            <td >Muara Nikum, <?php echo tgl_indo(date('Y-m-d')) ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Diterima Oleh<br><br><br><br></td>
                        </tr>
                        <tr>
                            <td><b><u>EMRIZAL</u></b></td>
                            <td><b><u><?php echo $dt['nama']; ?></u></b></td>
                        </tr>
                    </table>
                    <?php } ?>
                </div>
            </div>

            <div class="hidden-print m-t-30 m-b-30">
                <div class="text-right">
                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->



