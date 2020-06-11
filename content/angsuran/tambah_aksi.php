<?php

include("../../config.php");

    $tgl_angsuran = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_angsuran'])));

    // ambil data dari formulir
    $id_pinjaman = $_POST['f_id_pinjaman'];
    $bayar = $_POST['f_bayar_angsuran'];
    $tgl = $_POST['f_tgl_angsuran'];
    $sisa = $_POST['f_sisa_pinjaman'] - $bayar;
    // print_r($sisa);die;

    $sql = "UPDATE pinjaman SET sisa_pinjaman='$sisa' WHERE id_pinjaman=$id_pinjaman";
    $query = mysqli_query($db, $sql);

    $sql = "INSERT INTO angsuran (id_pinjaman,bayar_angsuran,tgl_angsuran) VALUE ('$id_pinjaman','$bayar','$tgl_angsuran')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=angsuran&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=angsuran&status=gagal');
    }

?>