<?php

include("../../config.php");

    $id_anggota = $_POST['f_id_anggota'];

    

    $bulan_pembayaran = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_bulan_pembayaran'])));
    $bulan_dibayar = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['f_bulan_dibayar'])));
    $klpk_tani = $_POST['f_klpk_tani'];

    print_r($bulan_pembayaran);die;

    $sql = "INSERT INTO pembayaran (id_anggota,klpk_tani,bulan_pembayaran,bulan_dibayar) VALUE ('$id_anggota','$klpk_tani','$bulan_pembayaran','$bulan_dibayar')";
    $query = mysqli_query($db, $sql);

    $sql2 = "SELECT max(id_pembayaran) as id_pby FROM pembayaran";
    $query2 = mysqli_query($db, $sql2);
    $id_pby2 = mysqli_fetch_assoc($query2);
    $id_pby = $id_pby2['id_pby'];

    $sql11 = "SELECT * FROM kewajiban";
    $query11 = mysqli_query($db, $sql11);
    while($dt = mysqli_fetch_array($query11)) { 
        $nama = $dt['nama'];
        $jlh = $dt['jumlah'];
        $sql12 = "INSERT INTO kewajiban_anggota (id_pembayaran,id_anggota,nama,jumlah) VALUE ('$id_pby','$id_anggota','$nama','$jlh')";
        $query = mysqli_query($db, $sql12);
    }

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=gaji&status=sukses-add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=gaji&status=gagal');
    }

?>