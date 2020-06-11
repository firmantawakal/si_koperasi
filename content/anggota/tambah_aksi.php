<?php

include("../../config.php");

    $tgl_daftar = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_daftar'])));

    // ambil data dari formulir
    $nama = $_POST['f_nama'];
    $no_ktp = $_POST['f_no_ktp'];
    $jekel = $_POST['f_jenis_kelamin'];
    $alamat = $_POST['f_alamat'];
    $no_hp = $_POST['f_no_hp'];
    $pekerjaan = $_POST['f_pekerjaan'];

    $sql = "INSERT INTO anggota (nama,no_ktp,jenis_kelamin,alamat,no_hp,pekerjaan,tgl_daftar) VALUE ('$nama','$no_ktp','$jekel','$alamat','$no_hp','$pekerjaan','$tgl_daftar')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=anggota&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=anggota&status=gagal');
    }

?>