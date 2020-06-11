<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Gaji</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Tambah Gaji</h4>

            <form class="form-horizontal" role="form" action="content/gaji/tambah_aksi.php" method="post">
                <input type="hidden" class="form-control" name="f_id_pembayaran" value="<?php echo $_GET['id_pby'] ?>">
                <input type="hidden" class="form-control" name="f_id_anggota" value="<?php echo $_GET['id_agt'] ?>">
               
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Periode</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" name="f_periode" required>
                            <option value="">Pilih...</option>
                        <?php 
                            for ($i=1; $i < 7 ; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Tgl. Gaji</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="f_tgl_gaji" id="datepicker" autocomplete="off" readonly required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Hasil Kg</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="f_hasil" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="f_harga" required>
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