<?php

include("../../config.php");

    $id = $_POST['f_id_anggota'];
    $tgl_daftar = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_daftar'])));

    // ambil data dari formulir
    $nama = $_POST['f_nama'];
    $no_ktp = $_POST['f_no_ktp'];
    $jekel = $_POST['f_jenis_kelamin'];
    $alamat = $_POST['f_alamat'];
    $no_hp = $_POST['f_no_hp'];
    $pekerjaan = $_POST['f_pekerjaan'];


    $sql = "UPDATE anggota SET nama='$nama',no_ktp='$no_ktp',jenis_kelamin='$jekel',alamat='$alamat',no_hp='$no_hp',pekerjaan='$pekerjaan', tgl_daftar='$tgl_daftar' WHERE id_anggota=$id";

    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=anggota&status=sukses-edit');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=anggota&status=gagal');
    }

?>