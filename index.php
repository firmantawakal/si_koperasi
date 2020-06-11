<?php 
	session_start();
	if($_SESSION['login'] != true){
		header("location:login.php");
	}

	include("config.php"); 
?>
<!DOCTYPE html>
<html>
    <head>
	    <?php include("template/head_script.php"); ?>
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="index.php" class="logo">
                                <span>
                                    <img src="assets/images/logo/logo.png" alt="" height="50">
                                </span>
                        <i>
                        <img src="assets/images/logo/logo2.png" alt="" height="50">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left nav-menu-left">
                            <li>
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-10.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul    > <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
	        <?php include("template/sidebar_menu.php"); ?>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <?php 
                        switch (@$_GET['page']) {
                            case 'anggota':
                                include("content/anggota/anggota.php");
                                break;

                            case 'tambah-anggota':
                                include("content/anggota/anggota_add.php");
                                break;

                            case 'edit-anggota':
                                include("content/anggota/anggota_edit.php");
                                break;

                            case 'simpanan':
                                include("content/simpanan.php");
                                break;

                            case 'tambah-simpanan-pokok':
                                include("content/simpanan_pokok/simpanan_pokok_add.php");
                                break;

                            case 'edit-simpanan-pokok':
                                include("content/simpanan_pokok/simpanan_pokok_edit.php");
                                break;

                            case 'tambah-simpanan-skr':
                                include("content/simpanan_skr/simpanan_skr_add.php");
                                break;

                            case 'edit-simpanan-skr':
                                include("content/simpanan_skr/simpanan_skr_edit.php");
                                break;

                            case 'tambah-simpanan-wk':
                                include("content/simpanan_wk/simpanan_wk_add.php");
                                break;

                            case 'edit-simpanan-wk':
                                include("content/simpanan_wk/simpanan_wk_edit.php");
                                break;

                            case 'pinjaman':
                                include("content/pinjaman/pinjaman.php");
                                break;
                            
                            case 'tambah-pinjaman':
                                include("content/pinjaman/pinjaman_add.php");
                                break;

                            case 'edit-pinjaman':
                                include("content/pinjaman/pinjaman_edit.php");
                                break;

                            case 'angsuran':
                                include("content/angsuran/angsuran.php");
                                break;
                            
                            case 'tambah-angsuran':
                                include("content/angsuran/angsuran_add.php");
                                break;

                            case 'edit-angsuran':
                                include("content/angsuran/angsuran_edit.php");
                                break;

                            case 'gaji':
                                include("content/gaji/gaji.php");
                                break;
                            
                            case 'tambah-gaji':
                                include("content/gaji/gaji_add.php");
                                break;
                            
                            case 'tambah-pembayaran':
                                include("content/gaji/pembayaran_add.php");
                                break;

                            case 'kewajiban':
                                include("content/kewajiban/kewajiban.php");
                                break;
                            
                            case 'edit-kewajiban':
                                include("content/kewajiban/kewajiban_edit.php");
                                break;
                            
                            case 'print-pembayaran':
                                include("content/gaji/pembayaran_print.php");
                                break;

                            case 'user':
                                include("content/user/user.php");
                                break;

                            case 'tambah-user':
                                include("content/user/user_add.php");
                                break;

                            case 'edit-user':
                                include("content/user/user_edit.php");
                                break;
                            
                            default:
                                include("content/balita/balita.php");
                                break;
                        }

                    ?>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    <?php echo date('Y'); ?> © Sistem Informasi Koperasi
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <?php include("template/foot_script.php"); ?>


    </body>
</html>