<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Kewajiban</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card-box table-responsive">
            <table class="table table-striped" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5px">No.</th>
                        <th>Nama Kewajiban</th>
                        <th>Jumlah</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $sql = "SELECT * FROM kewajiban";
                $query = mysqli_query($db, $sql);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo rupiah($data['jumlah']) ?></td>
                    <td><a href="index.php?page=edit-kewajiban&id=<?php echo $data['id_kewajiban'] ?>" type="button" class="btn btn-flat btn-primary">Edit</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->
</div><!-- .row -->