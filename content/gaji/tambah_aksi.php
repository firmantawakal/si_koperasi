<?php

include("../../config.php");

    $tgl_gaji = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_tgl_gaji'])));

    // ambil data dari formulir
    $id_pembayaran = $_POST['f_id_pembayaran'];
    $id_anggota = $_POST['f_id_anggota'];
    $periode = $_POST['f_periode'];
    $hasil = $_POST['f_hasil'];
    $harga = $_POST['f_harga'];
    $jumlah = $harga * $hasil;

    $sql = "INSERT INTO gaji (id_pembayaran,id_anggota,tgl_gaji,periode,hasil,harga,jumlah) VALUE ('$id_pembayaran','$id_anggota','$tgl_gaji','$periode','$hasil','$harga','$jumlah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=gaji&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=gaji&status=gagal');
    }

?>