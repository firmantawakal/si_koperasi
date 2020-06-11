<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data User</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <a href="index.php?page=tambah-user" type="button" class="btn btn-md btn-success">Tambah</a> <hr>
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                <tr>
                    <th style="width: 5px">No.</th>
                    <th>Username</th>
                    <th>Nama User</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $sql = "SELECT * FROM user";
                $query = mysqli_query($db, $sql);
                while($user = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['nama_user'] ?></td>
                    <td>
                    <a href="index.php?page=edit-user&id=<?php echo $user['username'] ?>" type="button" class="btn btn-flat btn-primary">Edit</a>
                    <a type='button' class='btn btn-flat btn-danger' href='content/user/hapus_aksi.php?id=<?php echo $user["username"] ?>' onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->