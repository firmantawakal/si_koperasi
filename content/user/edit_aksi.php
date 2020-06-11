<?php

include("../../config.php");

    // ambil data dari formulir
    $user = $_POST['f_username'];
    $pass = $_POST['f_password'];
    $nama = $_POST['f_nama_user'];

    $sql = "UPDATE user SET password='".$pass."', nama_user='".$nama."' WHERE username='".$user."'";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../../index.php?page=user&status=sukses-edit');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../../index.php?page=user&status=gagal');
    }

?>