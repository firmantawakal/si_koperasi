<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Simpanan</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Tambah <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="index.php?page=tambah-simpanan-pokok">Tambah Simpanan Pokok</a></li>
                    <li><a href="index.php?page=tambah-simpanan-skr">Tambah Simpanan Sukarela</a></li>
                    <li><a href="index.php?page=tambah-simpanan-wk">Tambah Simpanan Wajib / Kematian</a></li>
                </ul>
            </div>
            <hr>
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                <tr>
                    <th style="width: 5px">No.</th>
                    <th>Nama Anggota</th>
                    <th>Total Simpanan Pokok</th>
                    <th>Total Simpanan Sukarela</th>
                    <th>Total Simpanan Wajib & Kematian</th>
                    <th>Total Keseluruhan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $sql = "SELECT * FROM simpanan a, anggota b where a.id_anggota = b.id_anggota";
                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <?php 
                    $id = $data['id_simpanan'];
                    $sql2 = "SELECT sum(bayar_simpanan) as simpan_pokok FROM simpanan_pokok where id_simpanan = $id";
                    $query2 = mysqli_query($db, $sql2);
                    $data2 = mysqli_fetch_assoc($query2);
                    echo '<td>'.@rupiah($data2['simpan_pokok']).'</td>';

                    $sql3 = "SELECT sum(bayar_simpanan) as simpan_skr FROM simpanan_sukarela where id_simpanan = $id";
                    $query3 = mysqli_query($db, $sql3);
                    $data3 = mysqli_fetch_assoc($query3);
                    echo '<td>'.@rupiah($data3['simpan_skr']).'</td>';

                    $sql4 = "SELECT sum(bayar_simpanan_w) as simpan_w, sum(bayar_simpanan_k) as simpan_k FROM simpanan_wk where id_simpanan = $id";
                    $query4 = mysqli_query($db, $sql4);
                    $data4 = mysqli_fetch_assoc($query4);
                    echo '<td>'.@rupiah($data4['simpan_w']).' - '.@rupiah($data4['simpan_k']).'</td>';

                    $total = @$data2['simpan_pokok'] + @$data3['simpan_skr'] + @$data4['simpan_w'] + @$data4['simpan_k'];
                    echo '<td>'.@rupiah($total).'</td>';
                    ?>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->