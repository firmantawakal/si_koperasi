

<!-- jQuery  -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>

<!-- toast -->
<script src="plugins/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
<script src="assets/pages/jquery.toastr.js" type="text/javascript"></script>

<!-- Sweet-Alert  -->
<script src="plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>

<!-- chart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script src="plugins/select2/js/select2.min.js" type="text/javascript"></script>

<?php 
if(@$_GET['page']=='prediksi'):
    include('content/prediksi/chart_prediksi.php');
endif;
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();

        // Date Picker
        jQuery('#datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
        // Date Picker2
        jQuery('#datepicker2').datepicker({
            format: 'dd/mm/yyyy'
        });
    });
</script>

<script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

<!-- alert notification -->
<?php if(@$_GET['status']=='sukses-add'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Berhasil Ditambah",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-delete'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Berhasil Dihapus",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-edit'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Berhasil Di Update",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-rekap'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Berhasil Di Rekap",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-rekap-reset'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Rekap Berhasil Dihapus",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-prediksi'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Prediksi Berhasil Dilakukan",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='sukses-rekap-reset'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Sukses',
            text: "Data Prediksi Berhasil Dihapus",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00b200'
        });
</script>
<?php elseif(@$_GET['status']=='error-username-exist'):?>
<script type="text/javascript">
        $.toast({
            heading: 'Error',
            text: "Username sudah ada!",
            showHideTransition: 'slide',
            icon: 'error',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#f40c0c'
        });
</script>
<?php endif;?>

