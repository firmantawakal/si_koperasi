<?php

include("../../config.php");

    $tgl_simpanan = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_simpanan'])));

    // ambil data dari formulir
    $id_anggota = $_POST['f_id_anggota'];
    $jlh_bayar_w = $_POST['f_jumlah_bayar_w'];
    $jlh_bayar_k = $_POST['f_jumlah_bayar_k'];

    $sql1 = "SELECT * from simpanan where id_anggota = $id_anggota";
    $query1 = mysqli_query($db, $sql1);
    $data1 = mysqli_fetch_array($query1);

    if(count($data1) < 1) {
        $sql2 = "INSERT INTO simpanan (id_anggota) VALUE ('$id_anggota')";
        $query2 = mysqli_query($db, $sql2);
    }

    $sql3 = "SELECT * from simpanan where id_anggota = $id_anggota";
    $query3 = mysqli_query($db, $sql3);
    $data3 = mysqli_fetch_array($query3);

    $id_simp = $data3['id_simpanan'];

    $sql4 = "INSERT INTO simpanan_wk (id_simpanan,bayar_simpanan_w,bayar_simpanan_k,tgl_simpanan) VALUE ('$id_simp','$jlh_bayar_w','$jlh_bayar_k','$tgl_simpanan')";
    $query4 = mysqli_query($db, $sql4);

    // apakah query simpan berhasil?
    if( $query4 ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=simpanan&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=simpanan&status=gagal');
    }

?>