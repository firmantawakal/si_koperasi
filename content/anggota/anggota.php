<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Anggota</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <a href="index.php?page=tambah-anggota" type="button" class="btn btn-md btn-success">Tambah</a> <hr>
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                <tr>
                    <th style="width: 5px">No.</th>
                    <th>No. KTP</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pekerjaan</th>
                    <th>Tgl Daftar</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $sql = "SELECT * FROM anggota";
                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['no_ktp'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jenis_kelamin'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['no_hp'] ?></td>
                    <td><?php echo $data['pekerjaan'] ?></td>
                    <td><?php echo tgl_indo($data['tgl_daftar']) ?></td>
                    <td>
                    <a href="index.php?page=edit-anggota&id=<?php echo $data['id_anggota'] ?>" type="button" class="btn btn-flat btn-primary">Edit</a>
                    <a type='button' class='btn btn-flat btn-danger'  href='content/anggota/hapus_aksi.php?id=<?php echo $data["id_anggota"] ?>' onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->