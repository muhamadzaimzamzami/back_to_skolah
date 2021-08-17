<?php
    require "config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require "./partial/head.php";
    ?>
</head>

<body class="mini-sidebar">
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        <?php
            require "./partial/nav.php";
        ?>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <?php
                require "./partial/aside.php";
            ?>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Mata Pelajaran</h3><br>
                            <div class="table-responsive">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Data</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="exampleModalLabel1">Data Baru</h4> </div>
                                            <div class="modal-body">
                                                <h1>TAMBAH DATA</h1>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Bg Color</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $prov = mysqli_query($con, "SELECT * FROM mata_pelajaran");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($prov)) {
                                                $idTingkat = $data['id'];
                                                $namaMapel = $data['mp_name'];
                                                $color = $data['default_color'];
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $namaMapel ?></td>
                                            <td><?php echo $color?></td>
                                            <td>
                                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ===== Page-Container-End ===== -->
            <?php
                require "./partial/footer.php";
            ?>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <?php
        require "./partial/script.php";
    ?>
</body>

</html>
