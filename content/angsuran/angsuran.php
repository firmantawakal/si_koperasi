<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Angsuran</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <a href="index.php?page=tambah-angsuran" type="button" class="btn btn-md btn-success">Tambah</a> <hr>
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5px">No.</th>
                        <th>Tgl. Angsuran</th>
                        <th>No. KTP</th>
                        <th>Nama Anggota</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Jumlah Angsuran</th>
                        <th>Sisa Pinjaman</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $sql = "SELECT * FROM angsuran a, anggota b, pinjaman c 
                        where c.id_anggota = b.id_anggota and a.id_pinjaman = c.id_pinjaman";

                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo tgl_indo($data['tgl_angsuran']) ?></td>
                    <td><?php echo $data['no_ktp'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo rupiah($data['jumlah_pinjaman']) ?></td>
                    <td><?php echo rupiah($data['bayar_angsuran']) ?></td>
                    <td><?php echo rupiah($data['sisa_pinjaman']) ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->