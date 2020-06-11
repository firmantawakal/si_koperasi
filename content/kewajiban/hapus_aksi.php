<?php
include("../../config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];
    $sql = "DELETE FROM anggota WHERE id_anggota='".$id."'";
    $query = mysqli_query($db, $sql);

    if( $query ){
      header('Location: ../../index.php?page=anggota&status=sukses-delete');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>
