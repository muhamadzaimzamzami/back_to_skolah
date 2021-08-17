<?php
    require "./config/connect.php";
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
                            <h3 class="box-title m-b-0">Provinsi</h3>
                            <p class="text-muted m-b-30">Data Master Provinsi</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Regency</th>
                                            <th>Nama Kota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $prov = mysqli_query($con, "SELECT * FROM districts");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($prov)) {
                                                $idDist = $data['id'];
                                                $idRegency = $data['regency_id'];
                                                $namaDist = $data['name'];
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $idDist ?></td>
                                            <td><?php echo $idRegency?></td>
                                            <td><?php echo $namaDist ?></td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
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
