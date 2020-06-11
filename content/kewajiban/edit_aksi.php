<?php

include("../../config.php");

    $id = $_POST['f_id_kewajiban'];

    // ambil data dari formulir
    $nama = $_POST['f_nama'];
    $jumlah = $_POST['f_jumlah'];

    $sql = "UPDATE kewajiban SET nama='$nama',jumlah='$jumlah' WHERE id_kewajiban=$id";

    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses 
        header('Location: ../../index.php?page=kewajiban&status=sukses-edit');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=kewajiban&status=gagal');
    }

?>