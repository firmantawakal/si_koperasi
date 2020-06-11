<?php
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php?page=anggota');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM anggota WHERE id_anggota='".$id."'";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);
$tgl_daftar = date('d/m/Y', strtotime(str_replace('/', '-', $row['tgl_daftar'])));

?>
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
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Edit Anggota</h4>

            <form class="form-horizontal" role="form" action="content/anggota/edit_aksi.php" method="post">
                <input type="hidden" name="f_id_anggota" value="<?php echo $row['id_anggota'] ?>" />

                <div class="form-group row">
                    <label class="col-sm-2 control-label">No. KTP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_no_ktp" value="<?php echo $row['no_ktp'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_nama" value="<?php echo $row['nama'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="f_jenis_kelamin">
                            <option value="laki-laki" <?php ($row['jenis_kelamin']=='laki-laki') ? 'selected' : '' ; ?>>Laki - Laki</option>
                            <option value="perempuan" <?php ($row['jenis_kelamin']=='perempuan') ? 'selected' : '' ; ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="f_alamat"><?php echo $row['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_no_hp" value="<?php echo $row['no_hp'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_pekerjaan" value="<?php echo $row['pekerjaan'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Tgl Daftar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="f_tgl_daftar" id="datepicker" autocomplete="off" value="<?php echo $tgl_daftar ?>" readonly>
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