<?php
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php?page=anggota');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM kewajiban WHERE id_kewajiban='".$id."'";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Kewajiban</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Edit Kewajiban</h4>

            <form class="form-horizontal" role="form" action="content/kewajiban/edit_aksi.php" method="post">
                <input type="hidden" name="f_id_kewajiban" value="<?php echo $row['id_kewajiban'] ?>" />

                <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Kewajiban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_nama" value="<?php echo $row['nama'] ?>">
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="f_jumlah" value="<?php echo $row['jumlah'] ?>">
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