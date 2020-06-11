<?php

include("../../config.php");

    // ambil data dari formulir
    $user = $_POST['f_username'];
    $pass = $_POST['f_password'];
    $nama = $_POST['f_nama_user'];

    $sql1 = "SELECT * from user where username = '$user'";
    $res = mysqli_query($db, $sql1);
    $row = mysqli_num_rows($res);
    if ($row>0) {
        header('Location: ../../index.php?page=user&status=error-username-exist');
    }else{
        $sql = "INSERT INTO user (username, password, nama_user) VALUE ('$user','$pass','$nama')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: ../../index.php?page=user&status=sukses-add');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: ../../index.php?page=user&status=gagal');
        }
    }

?>