<?php
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php?page=tanaman');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE username='".$id."'";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

?>
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
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Edit User</h4>

            <form class="form-horizontal" role="form" action="content/user/edit_aksi.php" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_username" value="<?php echo $row['username'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="f_password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama User</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_nama_user" value="<?php echo $row['nama_user'] ?>" required>
                    </div>
                </div>
               
                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end row -->