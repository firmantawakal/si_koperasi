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
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Tambah Angsuran</h4>

            <form class="form-horizontal" role="form" action="content/angsuran/tambah_aksi.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <select id="anggota" class="form-control select2" name="f_id_anggota" required>
                            <option value="">Pilih...</option>
                        <?php 
                            $sql = "SELECT * FROM pinjaman a, anggota b where a.id_anggota = b.id_anggota";
                            $query = mysqli_query($db, $sql);
                            while($data = mysqli_fetch_array($query)){ ?>
                                <option value="<?php echo $data['id_anggota'] ?>"
                                data-idPinjaman="<?php echo $data['id_pinjaman'] ?>"
                                data-jlhPinjaman="<?php echo $data['jumlah_pinjaman'] ?>"
                                data-sisaPinjaman="<?php echo $data['sisa_pinjaman'] ?>"
                                ><?php echo $data['nama'] ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Jumlah Pinjaman</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jlhPinjaman" name="f_jumlah_pinjaman" readonly>
                        <input type="hidden" class="form-control" id="idPinjaman" name="f_id_pinjaman" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Sisa Pinjaman</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="sisaPinjaman" name="f_sisa_pinjaman" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Jumlah Pembayaran Angsuran</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="f_bayar_angsuran" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">Tgl. Angsuran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="f_tgl_angsuran" id="datepicker" autocomplete="off" readonly required>
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

<script type="text/javascript">
	var po = $("#anggota");
	po.on('change', function() {
		var jlh = $(this).find('option:selected').attr('data-jlhPinjaman');
		var id = $(this).find('option:selected').attr('data-idPinjaman');
		var sisa = $(this).find('option:selected').attr('data-sisaPinjaman');

		document.getElementById('jlhPinjaman').value = jlh;
		document.getElementById('idPinjaman').value = id;
		document.getElementById('sisaPinjaman').value = sisa;
	});
</script>