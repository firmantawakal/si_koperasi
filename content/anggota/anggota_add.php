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
            <h4 class="m-t-0 m-b-30 header-title">Tambah Anggota</h4>

            <form class="form-horizontal" role="form" action="content/anggota/tambah_aksi.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 control-label">No. KTP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_no_ktp">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="f_jenis_kelamin">
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="f_alamat"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_no_hp">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="f_pekerjaan">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Tgl Daftar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="f_tgl_daftar" id="datepicker" autocomplete="off" readonly>
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