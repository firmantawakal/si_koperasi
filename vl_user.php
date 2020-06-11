<?php
session_start();
include("config.php"); 
// echo 'aaa';
// print_r('test');

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$query = mysqli_query ($db, "SELECT * FROM user WHERE username='$Username' AND password='$Password'");
$row_cnt = mysqli_num_rows($query);
//echo $row_cnt;
// // Validasi Login
if ($row_cnt > 0){

	$queryuser = mysqli_query ($db, "SELECT * FROM user WHERE username='$Username'");
	$user = mysqli_fetch_array ($queryuser);
	
	if($user){

			if ($Password == $user["password"]){

				$_SESSION["username"] 			= $user["username"];
				$_SESSION["password"] 			= $user["password"];
				$_SESSION["nama"] 				= $user["nama_user"];
				$_SESSION["login"] 				= true;

				if ($_SESSION["login"] == true){
					header ("Location: index.php?page=anggota");
				}
				else{
					header("Location :pagenotfound.php");
					exit();
				}
			}
			else
			{
				header ("Location: index.php?Err=4");
				exit();
			}
	}
}
else {
	echo 'gagal login';
}

?>
