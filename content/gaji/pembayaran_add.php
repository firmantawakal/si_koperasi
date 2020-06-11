<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Pembayaran</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Tambah Pembayaran</h4>

            <form class="form-horizontal" role="form" action="content/gaji/tambah_pembayaran_aksi.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Atas Nama</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" name="f_id_anggota" required>
                            <option value="">Pilih...</option>
                        <?php 
                            $sql = "SELECT * FROM anggota";
                            $query = mysqli_query($db, $sql);
                            while($data = mysqli_fetch_array($query)){
                                echo '<option value="'.$data['id_anggota'].'">'.$data['nama'].'</option>';
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Kelompok Tani</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_klpk_tani" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Pembayaran Bulan</label>
                    <div class="col-sm-10">
                        <input type="month" class="form-control" name="f_bulan_pembayaran"  autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Dibayar Bulan</label>
                    <div class="col-sm-10">
                        <input type="month" class="form-control" name="f_bulan_dibayar" autocomplete="off" required>
                    </div>
                </div>
               
                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end row -->