<?php

include("../../config.php");

    $tgl_pinjaman = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_pinjaman'])));

    // ambil data dari formulir
    $id_anggota = $_POST['f_id_anggota'];
    $jumlah_pinjaman = $_POST['f_jumlah_pinjaman'];

    $sql = "INSERT INTO pinjaman (id_anggota,jumlah_pinjaman,sisa_pinjaman,tgl_pinjaman,status) VALUE ('$id_anggota','$jumlah_pinjaman','$jumlah_pinjaman','$tgl_pinjaman','angsuran')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=pinjaman&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=pinjaman&status=gagal');
    }

?>